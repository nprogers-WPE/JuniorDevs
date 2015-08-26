class RetryDecorator
  def initialize(caller, retries = 5)
    @caller = caller

    @retries = retries >= 1 ? retries : 1
  end

  def get
    current_exception = nil
    @retries.times do |iteration|
      begin
        response = @caller.get()
        return response
      rescue => e
        puts "Caller.get failed. Retrying [#{iteration + 1} of #{@retries}]"
        current_exception = e
        next
      end
    end

    raise current_exception
  end

  def method_missing(name_sym)
    return @caller.send(name_sym) if @caller.respond_to?(name_sym)
    super(name_sym)
  end
end
