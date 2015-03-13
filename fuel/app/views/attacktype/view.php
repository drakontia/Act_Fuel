<h2>Listing <span class='muted'><?php echo $name ?></span></h2>
<br>
<?php if ($attacktype): ?>
<table class="table table-bordered">
	<thead>
		<tr>
			<th>Type</th>
			<th>Damage</th>
			<th>Encdps</th>
			<th>Average</th>
			<th>Median</th>
			<th>Minhit</th>
			<th>Maxhit</th>
			<th>Resist</th>
			<th>Hits</th>
			<th>Misses</th>
			<th>Swings</th>
			<th>Tohit</th>
			<th>Delay</th>
			<th>Critperc</th>
			<th>Overheal</th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($attacktype as $item): ?>
        <tr>
<?php
if (isset($swingtype) and $item->swingtype == 100)
{
    $realswing = $swingtype;
}
else
{
    $realswing = $item->swingtype;
}

if (isset($swingtype2))
{
    $escapedurl = 'swing/view/'.$item->encid.'?attacker='.urlencode($item->attacker).'&victim='.urlencode($item->victim).'&swingtype='.$realswing.'&swingtype2='.$swingtype2.'&attacktype='.urlencode($item->type);
}
else
{
    $escapedurl = 'swing/view/'.$item->encid.'?attacker='.urlencode($item->attacker).'&victim='.urlencode($item->victim).'&swingtype='.$realswing.'&attacktype='.urlencode($item->type);
}?>
			<td><?php echo Html::anchor($escapedurl, $item->type); ?></td>
			<td><?php echo $item->damage; ?></td>
			<td><?php echo round($item->encdps); ?></td>
			<td><?php echo round($item->average, 1); ?></td>
			<td><?php echo $item->median; ?></td>
			<td><?php echo $item->minhit; ?></td>
			<td><?php echo $item->maxhit; ?></td>
			<td><?php echo $item->resist; ?></td>
			<td><?php echo $item->hits; ?></td>
			<td><?php echo $item->misses; ?></td>
			<td><?php echo $item->swings; ?></td>
			<td><?php echo $item->tohit; ?>%</td>
			<td><?php echo round($item->averagedelay, 1); ?></td>
			<td><?php echo $item->critperc; ?></td>
			<td><?php echo $item->overheal; ?></td>
		</tr>
<?php endforeach; ?>
    </tbody>
</table>
<?php if($swingtype == 21): ?>
<script type="text/javascript" src="https://www.google.com/jsapi?autoload={'modules':[{'name':'visualization', 'version':'1','packages':['timeline']}]}"></script>
<script type="text/javascript">

google.setOnLoadCallback(drawChart);
function drawChart() {

  //var dataJson = JSON.parse(<?php echo html_entity_decode($bufftime); ?>);
  var dataJson = <?php echo html_entity_decode(mb_convert_encoding($bufftime,"UTF-8")); ?>;
  var container = document.getElementById('timeline');
  var chart = new google.visualization.Timeline(container);
  var dataTable = new google.visualization.DataTable();
  dataTable.addColumn({ type: 'string', id: 'Attacktype' });
  dataTable.addColumn({ type: 'string', id: 'Victim' });
  dataTable.addColumn({ type: 'date', id: 'Start' });
  dataTable.addColumn({ type: 'date', id: 'End' });
  var length = dataJson.length;
  for(var i=0; i < length; i++)
  {
    dataTable.addRow([dataJson[i][0], dataJson[i][1], new Date(dataJson[i][2] * 1000),  new Date(dataJson[i][3] * 1000)]);
  }

  var options = {
    timeline: { colorByRowLabel: true,
                rowLabelStyle: { fontName: 'Meiryo', fontSize: 12, color: '#603913' },
                barLabelStyle: { fontName: 'Georgia', fontSize: 8 }
              },
    avoidOverlappingGridLines: false
  };

  chart.draw(dataTable, options);
}

</script>

<h2>Buff timer</h2>
<div id="timeline" style="width: 1200px; height: 1000px;"></div>
<?php endif; ?>

<?php else: ?>
<p>No Attacktype.</p>

<?php endif; ?>
