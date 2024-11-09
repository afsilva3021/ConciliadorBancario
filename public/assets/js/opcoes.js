$(document).ready(function () {
  // Array com valores e textos para as opções
  const opcoes = [
    { valor: '0', texto: 'Selecione uma configuração de conciliação' },
    { valor: '1', texto: '0001-Contas a Receber x Contabilidade' },
    { valor: '2', texto: '0002-Contas a Pagar x Contabilidade' },
    { valor: '3', texto: '0003-Movimentação Bancária x Contabilidade' },
    { valor: '4', texto: '0004-Cabeçalho das NF de Entrada x Contabilidade' },
    { valor: '5', texto: '0005-Itens das NF de Entrada x Contabilidade' },
    { valor: '6', texto: '0006-Movimentações Internas x Contabilidade' },
    { valor: '7', texto: '0007-Pedidos de Compras X Contabilidade' },
    { valor: '8', texto: '0008-Cotações x Contabilidade' },
    { valor: '9', texto: '0009-Pedidos de Venda x Contabilidade' },
    { valor: '10', texto: '0010-Itens de Pedidos x Contabilidade' },
    { valor: '11', texto: '0011-Cabeçhalho NF Saída x Contabilidade' },
    { valor: '12', texto: '0012-Itens NF Saida x Contabilidade' },
    { valor: '13', texto: '0013-Cheques x Contabilidade' },
    { valor: '14', texto: '0014-Rateio NF x Contabilidade' },
    { valor: '15', texto: '0015-Rateio Pedido de Vendas x Contabilidade' },
    { valor: '16', texto: '0016-Mov AVP CR x Contabilidade' },
    { valor: '17', texto: '0017-Distrib de Naturezas em CC x Contabilidade' },
    { valor: '18', texto: '0018-Mov AVP CP x Contabilidade' },
    { valor: '19', texto: '0019-Movimentos do Caixinha x Contabilidade' },
    { valor: '20', texto: '0020-NF de Entrada x Contabilidade' },
    { valor: '21', texto: '0021-NF de Saida x Contabilidade' },
    { valor: '23', texto: '0023-Cociliação Bancária Automática' },
    { valor: '24', texto: '0024-Conciliação Bancária Manual' }
  ];

  // Loop para adicionar cada opção ao select
  opcoes.forEach(function (opcao) {
    $('#opcoes').append(`<option value="${opcao.valor}">${opcao.texto}</option>`);
  });

  $('#opcoes').change(function () {
    const valorSelecionado = $(this).val();

    $('#secoes section').hide();  

    if (valorSelecionado !== 0) {
      $(`#secao-${valorSelecionado}`).show();
    }

  });
  console.log(valorSelecionado);

});