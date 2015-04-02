$(document).ready(function(){
  var calcOnepam = function(param){
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
      return data;
    }).fail(function(xhr, status, error){
      return error;
    });
  };

  var getParam = function(){
    var param = [];

    param['job'] = $('#form_job option:selected').val();
    param['acd'] = $('#form_actiondamage option:selected').val();
    param['atk'] = $('#form_attackmode option:selected').val();
    param['wmg'] = $('#form_ws_or_magic option:selected').val();
    param['spc'] = $('#form_basespec').val();
    param['itv'] = $('#form_interval').val();
    param['pwr'] = $('#form_power').val();
    param['pwu'] = $('#form_powerup option:selected').val();
    param['det'] = $('#form_determination').val();
    param['bst'] = $('#form_booster option:selected').val();
    param['dmu'] = $('#form_damageup option:selected').val();
    param['crt'] = $('#form_critical').val();
    param['cru'] = $('#form_criticalup option:selected').val();
    param['spd'] = $('#form_speed').val();
    param['spb'] = $('#form_speedboost option:selected').val();
    param['spu'] = $('#form_speedup option:selected').val();
    param['skl'] = $('#form_skill').val();

    return param;
  };

  $('#fire').click(function(){
    var param = getParam();
    var result = calcOnepam(param);

    $('#form_aadmg').val(result.aadmg);
    $('#form_wsdmg').val(result.wsdmg);
    $('#form_critper').val(result.critper);
    $('#form_gcd').val(result.gcd);
    $('#form_dpm').val(result.dpm);
    $('#form_dps').val(result.dps);
  });

  $('#equiv').click(function(){
    var result = []; // DPM
    var upper = [];  // 上昇値
    var diff = [];   // 増分率

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

    var param = getParam();
    var l = changer.length;
    for(i = 0; i < l; i++){
      param['skl'] = $('#form_s' + i).val();
      var org = param[changer[i][0]];
      param[changer[i][0]] = parseInt(param[changer[i][0]]) + changer[i][1];
      var tmp = calcOnepam(param);
      result.push(tmp.dpm);
      param[changer[i][0]] = org;
    }

    for(j = 0; j < l; j++) {
      $('#form_d' + j).val(result[j]);
      $('#form_u' + j).val(result[j] / result[0] - 1);
      upper.push(result[j] / result[0] - 1);
      $('#form_a' + j).val(upper[j] / param[j][1]);
      diff.push(upper[j] / param[j][1]);
    }

    for(k = 0; k < l; k++) {
      $('#form_e' + k).val(diff[k] / diff[9]);
    }
  });

});
