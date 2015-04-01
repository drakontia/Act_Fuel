$(document).ready(function(){
  $('#fire').click(function(){
    $.ajax({
      type: 'GET',
      url: 'http://drakontia.com/actdb/damage/calc',
      cache: false,
      datatype: 'json',
      data: {
        job: $('#form_job option:selected').val(),
        actiondamage: $('#form_actiondamage option:selected').val(),
        attackmode: $('#form_attackmode option:selected').val(),
        ws_or_magic: $('#form_ws_or_magic option:selected').val(),
        basespec: $('#form_basespec').val(),
        interval: $('#form_interval').val(),
        power: $('#form_power').val(),
        powerup: $('#form_powerup option:selected').val(),
        determination: $('#form_determination').val(),
        booster: $('#form_booster option:selected').val(),
        damageup: $('#form_damageup option:selected').val(),
        critical: $('#form_critical').val(),
        criticalup: $('#form_criticalup option:selected').val(),
        speed: $('#form_speed').val(),
        speedboost: $('#form_speedboost option:selected').val(),
        speedup: $('#form_speedup option:selected').val(),
        skill: $('#form_skill').val(),
      },
    }).done(function(data, status, xhr){
      $.each(data, function(i, item){
        $('#form_aadmg').val = item.aadmg;
        $('#form_wsdmg').val = item.wsdmg;
        $('#form_critper').val = item.critper;
        $('#form_gcd').val = item.gcd;
        $('#form_dpm').val = item.dpm;
        $('#form_dps').val = item.dps;
      });
      gChart.drawChart();
    }).fail(function(xhr, status, error){
      alert(error);
    }).always(function(arg1, status, arg2){
      //something
    });
  });
});
