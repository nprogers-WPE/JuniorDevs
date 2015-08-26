# query = QueryBuilder.new
# query.select(column_names).from(table_name).where('column1 < 10').where("account = 'my_account'")

class Query < Struct.new(:columns, :table, :where)
end

class SelectQueryBuilder

  COMMAND = 'SELECT '
  EOL = ';'

  def initialize
    @query = Query.new([], nil, [])
  end

  def select(columns = '*')
    (columns.is_a? Array) ? @query.columns += columns : @query.columns << columns
    self
  end

  def from(table)
    @query.table = table
    self
  end

  def where(clause)
    @query.where << clause
    self
  end

  def build_from
    "  FROM `#{@query.table}`"
  end

  def build_columns
    @query.columns.join(', ')
  end

  def build_where
    where = @query.where.join("\n  AND ")
    where ? '  WHERE ' + where : nil
  end

  def generateSQL
    [COMMAND + build_columns, build_from, build_where].join("\n") + EOL
  end
end
