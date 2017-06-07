g.selectAll(".bar")
    .data(data)
    .enter().append("rect")
      .attr("class", "bar")
      .attr("x", function(d) { return x(d.estado); })
      .attr("y", function(d) { return y(d.frequencia); })
      .attr("width", x.bandwidth())
      .attr("height", function(d) { return height - y(d.frequencia); });
});