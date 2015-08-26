class Caller
  def get
    raise StandardError, 'This is a really bad API call !!!'
  end

  def print_hello_world
    puts "Hello World"
  end
end
