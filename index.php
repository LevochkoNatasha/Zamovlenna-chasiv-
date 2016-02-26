<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Замовлення </title>
    <head/>
    <body>
	     		 <div align="center">
				 <body text ="#008B45" bgcolor="#FFFF99"> 
				 <font face="Verdana">
				 <H1>ФОРМА <br>
				 ЗАМОВЛЕННЯ <br>
				 ГОДИННИКІВ</H1> </font>
				 <br></div>
				 <div align="center">
				 <img src="http://neli.com.ua/images/Foto/Moda/Aksesuary/Yak-vybraty-naruchnyy-hodynnyk-4.jpg"> </div>
			 <form name = "formal1">
			 <font face="Verdana">
			 <font color="#FF7F00">
			 <u><H2>ОФОРМЛЕННЯ ЗАМОВЛЕННЯ </H2> </u>
			 <font color="#8B3A3A">
			 <H3>ОСОБИСТА ІНФОРМАЦІЯ КЛІЄНТА</H3>
			 <font color="#8B4726">
			 <font face="garamon">
			 <label for="name1"> Прізвище: </label><br>
		     <input type= "text" name "text1" size= "50" maxlenght= "50" placeholder = "ПІБ" /><br>
			 <label for="name1"> Ім'я: </label><br>
		     <input type= "text" name "text1" size= "50" maxlenght= "50" placeholder = "ПІБ" /><br>
			 <label for="name1"> По-батькові:</label><br>
		     <input type= "text" name "text1" size= "50" maxlenght= "50" placeholder = "ПІБ" /><br>
			 <label for="name1"> Місто: </label><br>
             <input type= "text"/id="name" "text2" size="50" maxlenght= "50" placeholder = "Місто" /><br>
			 <label for="name1"> Адрес: </label><br>
             <input type= "text"/id="name" "text4" size= "50" maxlenght= "50" placeholder= "Адрес" /><br><br></font>
			</font>
			 <div class="input">
			 <label for="name1"> Вид доставки:<br> 
             <input type="radio" name="Вид доставки" value="ukr_pochta" checked> 
             <label for="name1"> Укр почта </label><br>
             <input type="radio" name="Вид доставки" value="nova_pochta" checked> 
             <label for="name1"> Нова почта </label><br>
             <input type="radio" name="Вид доставки" value="samovizov" checked> 
             <label for="name1"> Самовизов </label><br>
             <input type="radio" name="Вид доставки" value="kyr'yer" checked> 
             <label for="name1"> Кур'єр </label><br><br> 
			 <for name ="forma"> 
			 <H3> ХАРАКТЕРИСТИКА ТОВАРУ</H3>
			 <font color="#8B4726">
			 <font face="garamon">
			     Бренд: <br>
				 <input type="checkbox" name="Бренд"  value="Diesel" checked> Diesel <br>
				 <input type="checkbox" name="Бренд"  value="Balmain" checked> Balmain <br>
				 <input type="checkbox" name="Бренд"  value="Casio" checked> Casio <br>
				 <input type="checkbox" name="Бренд"  value="Timex" checked> Timex <br><br>
				 Колір: <br>
				 <select name= "Колір"> size 8 multiple>
				 <option value= "yel"> жовтий
				 <option value= "oran"> жовтогарячий 
				 <option value= "blue"> блакитний
				 <option value= "pur"> фіолетовий
				 <option value= "bla"> чорний
				 <option value= "gre"> зелений
				 <option value= "pin"> рожевий
				 <option value= "whi"> білий
				 </select> <br><br>
				 <label for="price">Ціна: </label><br>
				<input type="text" id="price" size="50" maxlength="7"></input><br><br>
				 <label for="quantity"> Загальна кількість товару: </label><br>
				<input type="text" id="quantity" size="50" maxlength="7"></input> <br>
			 <title> Оплата </title>
			 <SCRIPT LANGUAGE="JavaScript"> 

                function totalPrice() 
                { 
                var cina = +document.getElementById('price').value 
                var kol = +document.getElementById('quantity').value 
                document.getElementById('result').value=cina*kol 
                } 

             </SCRIPT>
	</head>
            <input type=button value="Розрахунок" onclick=totalPrice()></br> <br>
            <label for="result"><font size="3"> Загальна ціна за замовлення: </font> </br> 
			<input type="text" id="result" size="50"><br><br>
			<for name ="forma"> 
			<input type="submit" name="submit" value= "Замовить">	 
		 </form> 
    </body>
</html>
              
			  
