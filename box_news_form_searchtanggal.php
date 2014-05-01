<table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr>
<td width="9" height="32"> </td>
<td>



<form name="form_indeks_search" method="post" action="<?php
echo $link_host ?>indeks">
<table width="100"  border="0" cellspacing="0" cellpadding="0">
<tr>
<td width="28%">
									
<span class="text_search"> </span>
						
						
									
                                      
                                      
                                                                          </td>
                                    <td width="16%"><select name="indeks_tanggal" class="input">
                                      <option value="<?php
echo date('d') ?>"><?php
echo date('d') ?></option>
                                      <?php
for ($i=01;$i<=31;$i++)
						  {
						   
						   if($i=='1')$i="01";
						   if($i=='2')$i="02";
						   if($i=='3')$i="03";
						   if($i=='4')$i="04";
						   if($i=='5')$i="05";
						   if($i=='6')$i="06";
						   if($i=='7')$i="07";
						   if($i=='8')$i="08";
						   if($i=='9')$i="09";
							
						  ?>
                                      <option value="<?php
print $i?>"><?php
print $i?></option>
                                      <?php
}
						  ?>
                                    </select></td>
                                    <td width="16%"><select name="indeks_bulan" class="input">
                                      <option value="<?php
echo date('m') ?>"><?php
echo bulan(date('m')) ?></option>
                                      <?php
for ($b=01;$b<=12;$b++) 
						  {
						   
						   
						   
						   if($b=='1'){$b="01"; }
						   if($b=='2'){$b="02"; }
						   if($b=='3'){$b="03"; }
						   if($b=='4'){$b="04"; }
						   if($b=='5'){$b="05"; }
						   if($b=='6'){$b="06"; }
						   if($b=='7'){$b="07"; }
						   if($b=='8'){$b="08"; }
						   if($b=='9'){$b="09"; }
						   if($b=='10'){$b="10"; }
						   if($b=='11'){$b="11"; }
						   if($b=='12'){$b="12"; }

						      
						       ?>
                                      <option value="<?php
echo  $b?>"><?php
echo  bulan($b); ?></option>
                                      <?php
}
						  ?>
                                    </select></td>
                                    <td width="16%"><select name="indeks_tahun" class="input">
                                      <option value="<?php
echo date('Y') ?>"><?php
echo date('Y') ?></option>
                                      <?php
for ($i=date('Y')-1;$i<=date('Y')+1;$i++) {
						      
						      ?>
                                      <option value="<?php
print $i?>"><?php
print $i?></option>
                                      <?php
}
						  ?>
                                    </select></td>
                                    <td width="23%">
                                      <input name="Submit_S" type="submit" id="Submit" value="Lihat Indeks" class="submit">
                                      
									  
									  </td>
                                    <td width="1%">&nbsp;</td>
                                  </tr>
                                </table>
 </form>
							  
							  
							  
							  
							  
							  
							  </td>
                              <td width="8"> </td>
                            </tr>
                          </table>
