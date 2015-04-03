$(document).ready(function(){
  var changer = [
    ['spd', 0],   // 00
    ['spd', 56],  // 01
    ['spd', 100], // 02
    ['spd', 150], // 03
    ['spd', 207], // 04
    ['spd', 255], // 05
    ['crt', 100], // 06
    ['crt', 200], // 07
    ['det', 100], // 08
    ['pwr', 100], // 09
    ['spc', 5]    // 10
  ];

  var getParam = function(){

    return {
      job: $('#form_job option:selected').val(),
      acd: $('#form_actiondamage option:selected').val(),
      atk: $('#form_attackmode option:selected').val(),
      wmg: $('#form_ws_or_magic option:selected').val(),
      spc: $('#form_basespec').val(),
      itv: $('#form_interval').val(),
      pwr: $('#form_power').val(),
      pwu: $('#form_powerup option:selected').val(),
      det: $('#form_determination').val(),
      bst: $('#form_booster option:selected').val(),
      dmu: $('#form_damageup option:selected').val(),
      crt: $('#form_critical').val(),
      cru: $('#form_criticalup option:selected').val(),
      spd: $('#form_speed').val(),
      spb: $('#form_speedboost option:selected').val(),
      spu: $('#form_speedup option:selected').val(),
      skl: $('#form_skill').val()
    };

  };

  $('#fire').click(function(){
    var param = getParam();

    $.ajax({
      type: 'GET',
      url: 'http://drakontia.com/actdb/damage/calc',
      cache: false,
      datatype: 'json',
      data: {
        job: param['job'],
        actiondamage: param['acd'],
        attackmode: param['atk'],
        ws_or_magic: param['wmg'],
        basespec: param['spc'],
        interval: param['itv'],
        power: param['pwr'],
        powerup: param['pwu'],
        determination: param['det'],
        booster: param['bst'],
        damageup: param['dmu'],
        critical: param['crt'],
        criticalup: param['cru'],
        speed: param['spd'],
        speedboost: param['spb'],
        speedup: param['spu'],
        skill: param['skl'],
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
    });

  });

  $('#damage').click(function(){
    var param = [];
    var l = changer.length;

    for(i = 0; i < l; i++){
      param[i] = getParam();
      param[i]['skl'] = $('#form_s' + i).val();
      param[i][changer[i][0]] = parseInt(param[i][changer[i][0]]) + parseInt(changer[i][1]);
      var $id = '#form_d' + i;
      $.ajax({
        type: 'GET',
        url: 'http://drakontia.com/actdb/damage/calc',
        async: false,
        cache: false,
        datatype: 'json',
        data: {
          job: param[i]['job'],
          actiondamage: param[i]['acd'],
          attackmode: param[i]['atk'],
          ws_or_magic: param[i]['wmg'],
          basespec: param[i]['spc'],
          interval: param[i]['itv'],
          power: param[i]['pwr'],
          powerup: param[i]['pwu'],
          determination: param[i]['det'],
          booster: param[i]['bst'],
          damageup: param[i]['dmu'],
          critical: param[i]['crt'],
          criticalup: param[i]['cru'],
          speed: param[i]['spd'],
          speedboost: param[i]['spb'],
          speedup: param[i]['spu'],
          skill: param[i]['skl'],
        },
      }).done(function(data, status, xhr){
        $($id).val(data.dpm);
      }).fail(function(xhr, status, error){
        alert(error);
      });
    }
  });

  $('#equiv').click(function(){
    var t1, t2, t3;
    var l = changer.length;
    for(j = 0; j < l; j++) {
      t1 = 0;
      t1 = ( $('#form_d' + j).val() / $('#form_d0').val() );
      $('#form_u' + j).val(t1);

      t2 = 0;
      t2 = t1 / changer[j][1];
      $('#form_a' + j).val(t2);
    }
    for(k = 0; k < l; k++) {
      t3 = 0;
      t3 = ( $('#form_a' + k).val() / $('#form_a9').val() );
      $('#form_e' + k).val(t3);
    }
  });

});
