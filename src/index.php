<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html">
		<meta charset="utf-8">
		<title>Форма</title>
	</head> 

	<body>
		<form action="handler.php" method="post">
			<p>
				<b>Добавление в базу данных нового пользователя</b>
			</p>
				
			<p>
			<div style="overflow: hidden;">
				<div style="width: 1000%;">
					<div style="float: left; width: 100px; height: 20px;">Дата:</div>
					<div id="current_date_block" name="date" style="float: left; width: 100px; height: 20px;"></div>
				</div>
			</div>
		
			<div style="overflow: hidden;">
				<div style="width: 1000%;">
					<div style="float: left; width: 100px; height: 20px;">Время:</div>
					<div id="current_time_block" name="time" style="float: left; width: 100px; height: 20px;"></div>
				</div>
			</div>
			
			<script type="text/javascript">
				function zero_first_format(value)
				{
					if (value < 10)
					{
						value='0'+value;
					}
					return value;
				}

				function current_date()
				{
					var current_datetime = new Date();
					var day = zero_first_format(current_datetime.getDate());
					var month = zero_first_format(current_datetime.getMonth()+1);
					var year = current_datetime.getFullYear();
				
					return day+"."+month+"."+year;
				}
				
				function current_time()
				{
					var current_datetime = new Date();
					var hours = zero_first_format(current_datetime.getHours());
					var minutes = zero_first_format(current_datetime.getMinutes());
					var seconds = zero_first_format(current_datetime.getSeconds());

					return hours+":"+minutes+":"+seconds;
				}
				var startInterval = setInterval(function() {
					document.getElementById('current_date_block').innerHTML = current_date();
					document.getElementById('current_time_block').innerHTML = current_time();
				}, 1000);
				
			</script>
			</p>
			<p>
				<div style="overflow: hidden;">
					<div style="width: 1000%;">
						<div style="float: left; width: 150px; height: 20px;">Имя пользователя </div>
						<div style="float: left; width: 100px; height: 30px;">
							<input type="text" name="name" placeholder="Имя" size="30">
						</div>
					</div>
				</div><Br>
				<div style="overflow: hidden;">
					<div style="width: 1000%;">
						<div style="float: left; width: 150px; height: 20px;">Пароль </div>
						<div style="float: left; width: 100px; height: 30px;">
							<input type="text" name="password" placeholder="Пароль" size="30">
						</div>
					</div>
				</div>
			</p>
			<p>
				<input type="submit" value="Отправить в БД" />
			</p>
		</form>
	</body>
</html>

