function calc() {
  var numMetragem = parseFloat(
    document.getElementById("txtMetragem").value.replace(",", ".")
  );
  var numComodos = parseFloat(
    document.getElementById("txtComodos").value.replace(",", ".")
  );
  var numAndares = parseFloat(
    document.getElementById("txtAndares").value.replace(",", ".")
  );
  var numAreaLazer = parseFloat(document.getElementById("txtAreaLazer").value);

    var numPreco = numMetragem * numComodos * numAndares * numAreaLazer;
    document.getElementById("txtPreco").value = numPreco;
    numPreco = numPreco.toFixed(2).replace(',', '.')
    numPreco = numPreco.toLocaleString('pt-BR', {style: 'currency', currency: 'BRL'});
  }

