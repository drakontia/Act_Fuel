google.load("visualization", "1", {packages:["timeline"]});

$(document).ready(function(){

  var container = document.getElementById('timeline');
  var chart = new google.visualization.Timeline(container);
  var dataTable = new google.visualization.DataTable();
  var options = {
    timeline: { colorByRowLabel: true,
                rowLabelStyle: { fontName: 'Meiryo', fontSize: 12, color: '#603913' },
                barLabelStyle: { fontName: 'Georgia', fontSize: 8 }
              },
    avoidOverlappingGridLines: false
  };

  gChart = {
    'prepareChart': function() {
      dataTable.addColumn({ type: 'string', id: 'Attacktype' });
      dataTable.addColumn({ type: 'string', id: 'Victim' });
      dataTable.addColumn({ type: 'date', id: 'Start' });
      dataTable.addColumn({ type: 'date', id: 'End' });
    },

    'drawChart': function() {
      chart.draw(dataTable, options);
    },

    'addRow': function(data) {
      dataTable.addRow([data[0], data[1], data[2], data[3]]);
    },

    'clearChart': function() {
      chart.clearChart();
    },
  };

  gChart.prepareChart;

  splitUri = location.pathname.split("/");
  encid = splitUri[splitUri.length - 1];

  $('#form_attacker').change(function(){
    $.ajax({
      type: 'GET',
      url: 'http://drakontia.com/actdb/swing/skills',
      cache: false,
      datatype: 'json',
      data: {
        encid: encid,
        attacker: $('#form_attacker option:selected').val(),
      },
    }).done(function(data, status, xhr){
      $('#form_skill > option').remove();
      $.each(data, function(i, item){
        $('#form_skill').append($('<option>').html(item.attacktype).val(item.attacktype));
      });
    }).fail(function(xhr, status, error){
      alert(error);
    }).always(function(arg1, status, arg2){
      //something
    });
  });

  $('#buttons [name=addbtn]').click(function(){
    $.ajax({
      type: 'GET',
      url: 'http://drakontia.com/actdb/swing/timeline',
      cache: false,
      datatype: 'json',
      data: {
        encid: encid,
        attacker: $('#form_attacker option:selected').val(),
        skill: $('#form_skill option:selected').val(),
      },
    }).done(function(data, status, xhr){
      $.each(data, function(i, item){
        gChart.addRow([item[0], item[1], new Date(item[2] * 1000),  new Date(item[3] * 1000)]);
      });
      gChart.drawChart;
    }).fail(function(xhr, status, error){
      alert(error);
    }).always(function(arg1, status, arg2){
      //something
    });
  })
  $('#buttons [name=resetbtn]').click(function(){
    gChart.clearChart();
    gChart.prepareChart();
  });
});
