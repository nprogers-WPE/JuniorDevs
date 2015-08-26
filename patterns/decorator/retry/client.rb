class Client
  def initialize(obj)
    @obj = obj
  end

  def call_it
    begin
      @obj.get()
    rescue => e
      puts e.inspect
    end
  end

  def print_it
    @obj.print_hello_world()
  end
end
