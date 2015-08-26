require_relative 'caller'
require_relative 'client'
require_relative 'retry_decorator'

puts "\n\n------------------ WITH RETRY ON ---------------------\n\n"
caller = Caller.new()
caller = RetryDecorator.new(caller)

client = Client.new(caller)
client.print_it()
client.call_it()

puts "\n\n----------------- WITH RETRY OFF ---------------------\n\n"
caller = Caller.new()

client = Client.new(caller)
client.print_it()
client.call_it()
