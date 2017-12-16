<?php
namespace Results\View\Helper;

use Cake\View\Helper;

class ResultsHelper extends Helper
{
  public $helpers = ['Html'];

	public function menu($datas,$link,$query)
	{	
		if (isset($query[$link])) {
			$tmp = $query[$link];
		} else {
			$tmp = array();
		}
		echo "<table width=100%>";
		$i = $x = 0;
    foreach ($datas as $data):
      $class = null;
      if ($i++ % 2 == 0) {
        $class = ' class="altrow"';
      }
      if ($x==0) echo "</tr><tr".$class.">";
      echo "<td>";
			$query[$link] = ($link=='date') ? $data[$link]->format('Y-m-d') :  $data[$link];
			if ($query[$link]==$tmp) unset($query[$link]);
			if ($link=='race') { 
				unset($query);
				$query = array();
			}
      echo $this->Html->link(($link=='date') ? $data[$link]->format('Y-m-d') :  $data[$link],
						array('plugin'=>'Results','controller'=>'Results','action' => 'index','?'=> $query ));
      echo "</td>";
      if ($x>=0) $x=0; else $x++;
    endforeach;
		echo "</table>";
	}
}
