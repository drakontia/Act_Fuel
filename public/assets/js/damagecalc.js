$(document).ready(function(){
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
    var orginalv = 0;
    var t1, t2, t3;

    for(i = 0; i < l; i++){
      param['skl'] = $('#form_s' + i).val();
      orginalv = param[changer[i][0]];
      param[changer[i][0]] = parseInt(param[changer[i][0]]) + parseInt(changer[i][1]);
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
        result.push(data.dpm);
      }).fail(function(xhr, status, error){
        alert(error);
      });
      param[changer[i][0]] = orginalv;
    }

    for(j = 0; j < l; j++) {
      $('#form_d' + j).val(result[j]);

      t1 = 0;
      t1 = (result[j] / result[0]) - 1;
      $('#form_u' + j).val(t1);
      upper.push(t1);

      t2 = 0;
      t2 = upper[j] / changer[j][1];
      $('#form_a' + j).val(t2);
      diff.push(t2);
    }

    for(k = 0; k < l; k++) {
      t3 = 0;
      t3 = diff[k] / diff[9];
      $('#form_e' + k).val(t3);
    }
  });

});
