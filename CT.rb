require "yaml"
require 'erb'
require 'open3'
cli = { 'php' => 'php', 'ruby' => 'ruby', 'javascript'=>'node', 'js'=>'node', 'c' => 'tcc -run'}
problem = YAML::load_file(ARGV[0] + "/desc.yml")
output = ERB.new(IO.read('template.rt'))
puts output.result()
if(ARGV[1] == 'test') 
	if(problem['solutions'])
		problem['solutions'].each do |sol|
			if(cli[sol[1]['language']])
				parameter = (sol[1]['parameters']) ? " " + sol[1]['parameters'] : ""
				stdin, stdout, stderr = Open3.popen3(cli[sol[1]['language']] + " "+ARGV[0]+"/"+sol[0] + parameter)
				puts sol[0]+": " +stdout.readlines[0]
				#Open3#popen3(cli[sol[1]['language']] + " "+ARGV[0]+"/"+sol[0])
			end
		end
	else
		puts "No solutions for said problem"
	end
end

if(ARGV[1] == 'table') 
	require 'terminal-table'
	files = Dir[ARGV[0]+"/**/*/desc.yml"]
	files.sort
	entry = []
	files.each do |file| 
		yaml = YAML::load_file(file)
		nested = file.split('/')
		count = 0
		if( yaml['solution'] and yaml['solutions']) 
			yaml['solutions'].each do |sol|
				count += 1
			end
		end
		entry << {'title'=>yaml['title'],'code'=>nested[-2].to_s,'solved'=>count}
	end

	rows = []
	entry.each do |e|
		solvedstring = (e['solved'] == 0) ? "No" : "Yes("+e['solved'].to_s+")"
		row = [e['code'],e['title'],solvedstring]
		rows << row
	end
	table = Terminal::Table.new(:headings => ['Code','Title','Solved'],:rows => rows)
	puts table
end
