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

  $('#damage').click(function(){
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
    var para2 = [];
    var l = changer.length;

    for(i = 0; i < l; i++){
      para2[i] = param;
      para2[i]['skl'] = $('#form_s' + i).val();
      para2[i][changer[i][0]] = parseInt(para2[i][changer[i][0]]) + parseInt(changer[i][1]);
      $.ajax({
        type: 'GET',
        url: 'http://drakontia.com/actdb/damage/calc',
        async: false,
        cache: false,
        datatype: 'json',
        data: {
          job: para2[i]['job'],
          actiondamage: para2[i]['acd'],
          attackmode: para2[i]['atk'],
          ws_or_magic: para2[i]['wmg'],
          basespec: para2[i]['spc'],
          interval: para2[i]['itv'],
          power: para2[i]['pwr'],
          powerup: para2[i]['pwu'],
          determination: para2[i]['det'],
          booster: para2[i]['bst'],
          damageup: para2[i]['dmu'],
          critical: para2[i]['crt'],
          criticalup: para2[i]['cru'],
          speed: para2[i]['spd'],
          speedboost: para2[i]['spb'],
          speedup: para2[i]['spu'],
          skill: para2[i]['skl'],
        },
      }).done(function(data, status, xhr){
        $('#form_d' + i).val(data.dpm);
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
      t2 = t1 / changer[i][1];
      $('#form_a' + j).val(t2);
    }
    for(k = 0; k < l; k++) {
      t3 = 0;
      t3 = ( $('#form_a' + k).val() / $('#form_a9').val() );
      $('#form_e' + k).val(t3);
    }
  });

});
