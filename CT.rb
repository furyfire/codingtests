require "yaml"
require 'erb'
require 'open3'
require 'pp'
require 'benchmark'
include Benchmark
cli = { 'php' => 'php', 'ruby' => 'ruby', 'lua'=> 'lua', 'javascript'=>'node', 'js'=>'node', 'c' => 'tcc -run'}
settings = YAML::load_file("settings.yml")

problem = YAML::load_file(ARGV[0] + "/desc.yml")

case ARGV[1] 
	when 'test'
		if(problem['solutions'])
			problem['solutions'].each do |sol|
				if(cli[sol[1]['language']])
					puts "--------------\n|"+sol[0]+"\n--------------"
					puts sol[1]['desc']
					parameter = (sol[1]['parameters']) ? " " + sol[1]['parameters'] : ""
					stdin, stdout, stderr = Open3.popen3(cli[sol[1]['language']] + " "+ARGV[0]+"/"+sol[0] + parameter)
					puts "Result: " + stdout.readlines[0]

				end
			end
		else
			puts "No solutions for said problem"
		end
	
	when 'table'

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
	else
		output = ERB.new(IO.read('template.rt'))
		puts output.result()
end
