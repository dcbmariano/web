d3.tsv("data.tsv", function(d) {
  d.frequencia = +d.frequencia;
  return d;
}, function(error, data) {
  if (error) throw error;
  x.domain(data.map(function(d) { return d.estado; }));
  y.domain([0, d3.max(data, function(d) { return d.frequencia; })]);