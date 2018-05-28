<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style>
	body {
		display: flex;
		flex-direction: row;
	}
  #main {
    display: flex;
    justify-content: center;
  }
      * {
        box-sizing: border-box;
      }

      input, select, button {
        background-position: 10px 10px;
        background-repeat: no-repeat;
        width: 50%;
        font-size: 13px;
        padding: 12px 20px 12px 40px;
        border: 1px solid #ddd;
        margin-bottom: 12px;
      }
	#form1 label {
        background-position: 10px 10px;
        background-repeat: no-repeat;
        width: 100%;
        font-size: 20px;
        padding: 12px 20px 12px 0px;
        margin-bottom: 12px;
		  color: #09539e;
      }

	#form2 label {
        background-position: 10px 10px;
        background-repeat: no-repeat;
        width: 100%;
        font-size: 20px;
        padding: 12px 20px 12px 40px;
        margin-bottom: 12px;
		  color: #09539e;
      }
      .two {
      	margin-left: 10%;
      }
      .g1 {
      	height: 80px;
      }
      table {
      	width: 600px;
      	margin-top: 8%;
      	margin-left: 5%;
      }
      input {
      	height: 40px;
      }
	</style>

</head>
<body>
	<div class="one">
			<table border="3">
		<tr style="color: #09539e;">
			<td>Ученик</td><!-- только те учителя которые задали дз -->
			<td>Примечание от ученика</td>
			<td>Ссылка на работу</td>
		</tr>
		<form><tr><td>Алешин Алексей</td><td></td><td>CСылка..</td></tr></form>
	<form><tr><td>Кладин Андрей</td><td></td><td></td></tr></form>
	<form><tr><td>Селин Дмитрий</td><td></td><td></td></tr></form>
	<form><tr><td>Хасен Арман</td><td></td><td></td></tr></form>
	</table>
	</div>
	<div class="two">
	<form class="form" action="" method="POST" id="form2">
    <label for="name"><h3>Дать Д/З </h3></label>
	<select name="type" placeholder="Выбрать учителя">
  <!--тут должен быть список учителей которому будет скидываться дз -->
   			</select>
    <input  type="file"   name="file"    placeholder="Отправить файл">
    <input       type="text"      name="text"      placeholder="Примечание">
    <button type="submit">Отправить</button>
  </form>
  </div>
</body>
</html>