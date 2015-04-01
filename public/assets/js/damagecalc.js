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
      $('#form_aadmg').val(data.aadmg);
      $('#form_wsdmg').val(data.wsdmg);
      $('#form_critper').val(data.critper);
      $('#form_gcd').val(data.gcd);
      $('#form_dpm').val(data.dpm);
      $('#form_dps').val(data.dps);
    }).fail(function(xhr, status, error){
      alert(error);
    }).always(function(arg1, status, arg2){
      //something
    });
  });
  $('#equiv').click(function(){
    var result = [];
    var upper = [];
    var diff = [];
    var param = [];
    var equiva = [];
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
        skill: $('#form_s1').val(),
      },
    }).done(function(data, status, xhr){
      $('#form_d1').val(data.dpm);
      result[] = data.dpm;
      upper[] = $('#form_u1');
      diff[] = 0;
      param[] = $('#form_a1');
      equiva[] = $('#form_e1');
    });
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
        speed: $('#form_speed').val() + 56,
        speedboost: $('#form_speedboost option:selected').val(),
        speedup: $('#form_speedup option:selected').val(),
        skill: $('#form_s2').val(),
      },
    }).done(function(data, status, xhr){
      $('#form_d2').val(data.dpm);
      result[] = data.dpm;
      upper[] = $('#form_u2');
      diff[] = 56;
      param[] = $('#form_a2');
      equiva[] = $('#form_e2');
    });
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
        speed: $('#form_speed').val() + 100,
        speedboost: $('#form_speedboost option:selected').val(),
        speedup: $('#form_speedup option:selected').val(),
        skill: $('#form_s3').val(),
      },
    }).done(function(data, status, xhr){
      $('#form_d3').val(data.dpm);
      result[] = data.dpm;
      upper[] = $('#form_u3');
      diff[] = 100;
      param[] = $('#form_a3');
      equiva[] = $('#form_e3');
    });
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
        speed: $('#form_speed').val() + 150,
        speedboost: $('#form_speedboost option:selected').val(),
        speedup: $('#form_speedup option:selected').val(),
        skill: $('#form_s4').val(),
      },
    }).done(function(data, status, xhr){
      $('#form_d4').val(data.dpm);
      result[] = data.dpm;
      upper[] = $('#form_u4');
      diff[] = 150;
      param[] = $('#form_a4');
      equiva[] = $('#form_e4');
    });
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
        speed: $('#form_speed').val() + 207,
        speedboost: $('#form_speedboost option:selected').val(),
        speedup: $('#form_speedup option:selected').val(),
        skill: $('#form_s5').val(),
      },
    }).done(function(data, status, xhr){
      $('#form_d5').val(data.dpm);
      result[] = data.dpm;
      upper[] = $('#form_u5');
      diff[] = 207;
      param[] = $('#form_a5');
      equiva[] = $('#form_e5');
    });
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
        speed: $('#form_speed').val() + 255,
        speedboost: $('#form_speedboost option:selected').val(),
        speedup: $('#form_speedup option:selected').val(),
        skill: $('#form_s6').val(),
      },
    }).done(function(data, status, xhr){
      $('#form_d6').val(data.dpm);
      result[] = data.dpm;
      upper[] = $('#form_u6');
      diff[] = 255;
      param[] = $('#form_a6');
      equiva[] = $('#form_e6');
    });
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
        critical: $('#form_critical').val() + 100,
        criticalup: $('#form_criticalup option:selected').val(),
        speed: $('#form_speed').val(),
        speedboost: $('#form_speedboost option:selected').val(),
        speedup: $('#form_speedup option:selected').val(),
        skill: $('#form_s7').val(),
      },
    }).done(function(data, status, xhr){
      $('#form_d7').val(data.dpm);
      result[] = data.dpm;
      upper[] = $('#form_u7');
      diff[] = 100;
      param[] = $('#form_a7');
      equiva[] = $('#form_e7');
    });
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
        critical: $('#form_critical').val() + 200,
        criticalup: $('#form_criticalup option:selected').val(),
        speed: $('#form_speed').val(),
        speedboost: $('#form_speedboost option:selected').val(),
        speedup: $('#form_speedup option:selected').val(),
        skill: $('#form_s8').val(),
      },
    }).done(function(data, status, xhr){
      $('#form_d8').val(data.dpm);
      result[] = data.dpm;
      upper[] = $('#form_u8');
      diff[] = 200;
      param[] = $('#form_a8');
      equiva[] = $('#form_e8');
    });
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
        determination: $('#form_determination').val() + 100,
        booster: $('#form_booster option:selected').val(),
        damageup: $('#form_damageup option:selected').val(),
        critical: $('#form_critical').val(),
        criticalup: $('#form_criticalup option:selected').val(),
        speed: $('#form_speed').val(),
        speedboost: $('#form_speedboost option:selected').val(),
        speedup: $('#form_speedup option:selected').val(),
        skill: $('#form_s9').val(),
      },
    }).done(function(data, status, xhr){
      $('#form_d9').val(data.dpm);
      result[] = data.dpm;
      upper[] = $('#form_u9');
      diff[] = 100;
      param[] = $('#form_a9');
      equiva[] = $('#form_e9');
    });
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
        power: $('#form_power').val() + 100,
        powerup: $('#form_powerup option:selected').val(),
        determination: $('#form_determination').val(),
        booster: $('#form_booster option:selected').val(),
        damageup: $('#form_damageup option:selected').val(),
        critical: $('#form_critical').val(),
        criticalup: $('#form_criticalup option:selected').val(),
        speed: $('#form_speed').val(),
        speedboost: $('#form_speedboost option:selected').val(),
        speedup: $('#form_speedup option:selected').val(),
        skill: $('#form_s0').val(),
      },
    }).done(function(data, status, xhr){
      $('#form_d0').val(data.dpm);
      var result[] = data.dpm;
      upper[] = $('#form_u0');
      diff[] = 100;
      param[] = $('#form_a0');
      equiva[] = $('#form_e0');
    });
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
        basespec: $('#form_basespec').val() + 5,
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
        skill: $('#form_sa').val(),
      },
    }).done(function(data, status, xhr){
      $('#form_da').val(data.dpm);
      result[] = data.dpm;
      upper[] = $('#form_ua');
      diff[] = 5;
      param[] = $('#form_aa');
      equiva[] = $('#form_ea');
    });

    l = result.length;
    for(i = 0; i < l; i++){
      upper[i].val = result[i]/result[0];
      param[i].val = upper[i].val / diff[i];
    }
    for(j = 0; j < l; j++){
      equiva[j].val = param[j].val/param[9].val;
    }

});
