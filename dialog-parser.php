<?php
$file = file('scripts/1.txt');

// Separating strings in sections
$number = -1;
$sections = $sections_blocks = array();
foreach($file as $line){
	$checkDialogueChanged = preg_match('/\{\{[0-9]+\}\}/', $line);
	if($checkDialogueChanged){
		$expression = preg_match('/\{\{[0-9]+\}\}/', $line, $results);
		$number = str_replace(array('{', '}'), '', $results[0]);
		$number = (int)$number;
	}
	
	if($number > -1){
		$line = str_replace('{{' . $number . '}}', '', $line);
		
		if(!isset($sections[$number])){
			$sections[$number] = $line;
		} else {
			$sections[$number] .= $line;
		}
	}
}

$tag = false;
$tag_text = '';
$i = 0;

// Iterating into sections to separate them into blocks
foreach($sections as $number=>$section){
	$chars_section = str_split($section);
	
	// Iterating current section, char by char
	foreach($chars_section as $char){
		if($char == '{'){
			$tag = true;
		} elseif($char == '}'){
			$tag = false;
		}
		
		if(!isset($sections_blocks[$number])){
			$sections_blocks[$number] = array();
		}
		if(!isset($sections_blocks[$number][$i])){
			$sections_blocks[$number][$i] = $char;
		} else {
			$sections_blocks[$number][$i] .= $char;
		}
		
		if($tag){
			if($char != '{'){
				$tag_text .= $char;
			}
		} else {
			$checkBreakDetected = in_array($tag_text, array('p', 'nextpage_button', 'nextpage_nobutton'));
			if($checkBreakDetected){
				$i++;
			}
			$tag_text = '';
		}
	}
}
?>
<table>
	<thead>
		<tr>
			<th>Seção</th>
			<th>Bloco</th>
			<th>Prévia</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach($sections_blocks as $number=>$blocks){ ?>
			<?php foreach($blocks as $block){ ?>
				<tr>
					<td>{{<?php echo $number ?>}}</td>
					<td><?php echo $block ?></td>
					<td>---</td>
				</tr>
			<?php } ?>
		<?php } ?>
	</tbody>
	<tfoot>
		<tr>
			<td colspan="3"></td>
		</tr>
	</tfoot>
</table>