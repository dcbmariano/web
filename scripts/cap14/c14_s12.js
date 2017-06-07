var x = d3.scaleBand().rangeRound([0, width]).padding(0.1),
    y = d3.scaleLinear().rangeRound([height, 0]);
var g = svg.append("g")
    .attr("transform", "translate(" + margin.left + "," + margin.top + ")");