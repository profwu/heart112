<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Framingham心血管疾病風險預測</title>
</head>

<body>
<p>Framingham心血管疾病風險預測</p>
<form id="form1" name="form1" method="post" action="result.php">
  <table width="700" border="1">
    <tbody>
      <tr>
        <td style="width: 215px">危險因子 Risk Factors</td>
        <td style="width: 189px">單位 Unit</td>
        <td style="width: 177px">資料 Data</td>
      </tr>
      <tr>
        <td style="width: 215px; height: 22px;">性別 (Sex)</td>
        <td style="width: 189px; height: 22px;"></td>
        <td style="width: 177px; height: 22px;">
        <label><input type="radio" name="SexGroup" value="1" id=""SexGroup_0" checked="true">男</label>
        <label><input type="radio" name="SexGroup" value="2" id=""SexGroup_1">女</label>
        
        </td>
      </tr>
      <tr>
        <td style="width: 215px">年齡 (Age)</td>
        <td style="width: 189px">歲</td>
        <td style="width: 177px">
        
        
        <select name="age">
        <?php
          for($i = 10; $i <=99; $i++) {
          	echo '<option value = "' . $i . '">' . $i . '</option>';
          }
        ?>
   		</select></td>
      </tr>
      <tr>
        <td style="width: 215px">血壓 (Blood pressure)</td>
        <td style="width: 189px">舒張壓Diastolic</td>
        <td style="width: 177px">
        <select name="blood_press1" id="blood_press1">
        <?php
        $blood_range1 =['小於80'=>79, '80-84'=>85, '85-89'=>88, '90-99'=>95, '100以上'=>101];
        foreach($blood_range1 as $key=>$value) {
             echo '<option value="' , $value, '">' , $key, '</option>';
        }
        ?>
        
        </select>
        
        </td>
      </tr>
      <tr>
        <td style="width: 215px">&nbsp;</td>
        <td style="width: 189px">收縮壓Systolic</td>
        <td style="width: 177px">
       <select name="blood_press2" id="blood_press2">
        <?php
        $blood_range2 =['小於120'=>110, '120-129'=>125, '130-139'=>135, '140-159'=>145, '160以上'=>165];
        foreach($blood_range2 as $key=>$value) {
             echo '<option value="' , $value, '">' , $key, '</option>';
        }
        ?>
        
        </select>
        
 
        
        
        </td>
      </tr>
      <tr>
        <td style="width: 215px">使用高血壓藥物<br>(Anti-hypertensives)</td>
        <td style="width: 189px">&nbsp;</td>
        <td style="width: 177px"><input name="high_blood" type="checkbox">有</td>
      </tr>
      <tr>
        <td style="width: 215px">抽煙 (Smoker)</td>
        <td style="width: 189px">&nbsp;</td>
        <td style="width: 177px"><input name="smoke" type="checkbox">有</td>
      </tr>
      <tr>
        <td style="width: 215px">糖尿病 (Diabetes)</td>
        <td style="width: 189px">&nbsp;</td>
        <td style="width: 177px"><input name="diabetes" type="checkbox">有</td>
      </tr>
      <tr>
        <td style="width: 215px">高密度膽固醇 (HDL)</td>
        <td style="width: 189px">mg/dl</td>
        <td style="width: 177px">
        <select name="hdl" id="hdl">
        <?php
        $hdl =['小於35'=>20, '35-44'=>40, '45-49'=>48, '50-59'=>55, '60以上'=>70];
        foreach($hdl as $key=>$value) {
             echo '<option value="' , $value, '">' , $key, '</option>';
        }
        ?>
        
        </select>

        
        </td>
      </tr>
      <tr>
        <td style="width: 215px">總膽固醇 (TDL)</td>
        <td style="width: 189px">mg/dl</td>
        <td style="width: 177px">
        <select name="tdl" id="tdl">
        <?php
        $tdl =['小於160'=>150, '160-199'=>170, '200-239'=>220, '240-279'=>250, '279以上'=>280];
        foreach($tdl as $key=>$value) {
             echo '<option value="' , $value, '">' , $key, '</option>';
        }
        ?>
        
        </select>

        
        </td>
      </tr>
    </tbody>
  </table>
  <p>
    <input type="submit" name="submit" id="submit" value="送出">
    <input type="reset" name="reset" id="reset" value="重設">
  </p>
</form>
<p>&nbsp;</p>
</body>
</html>