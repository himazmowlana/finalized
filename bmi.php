<!DOCTYPE php>
<php>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width =device-width, initial-scale=1">
	<title>Project</title>
	<link rel="stylesheet" href="bmi%20style.css">
</head>	
<body>

	<div class="calculate">
		
		<p class="title">CALCULATE YOUR BMI</P>
		
		<div class="gender">
			<div class="male active"><span>&#9794;</span></div>
			<div class="female"><span>&#9792;</span></div>
		</div>
	
		<div class="height">

			<p>HEIGHT</p>

			<p class="val">
				<i class="sub">-</i>
				<span>50</span>CM
				<i class="add">+</i>
			</p>

			<input type="range" min="50" max="220" value="50">

		</div>

		<div class="weight">

			<p>WEIGHT</p>

			<p class="val">
				<i class="sub">-</i>
				<span>10</span>KG
				<i class="add">+</i>
			</p>

			<input type="range" min="10" max="180" value="10">

		</div>

		<div class="calc">CALCULATE</div>

        <a href="index.php" id="a1">
            <button class="btn-outline">Home</button></a>

	</div>
	<div class="result">
		<div class="bmi">
			<div class="title">YOUR BMI</div>
			<div class="val">0.00</div>
		</div>

		<div class="text">Your BMI is Normal!</div>
        <a href="Pdf/Weight Gain Plan.pdf" download id="down">UNDERWEIGHT: Click to View Your Workout Program</a>
        <a href="Pdf/Over Weight Plan.pdf" download id="down">OVERWEIGHT: Click to View Your Workout Program</a>
        <a href="Pdf/Extreme Over Weight Plan.pdf" download id="down">OBESE: Click to View Your Workout Program</a>

		<div class="recalc">RECALCULATE</div>
	</div>

<!-----BMI Script----->
<script>
    let gender = 'male';
        height = 50;
        weight = 10;
    
    document.querySelector('.calculate .gender .male').onclick = function() {
        gender = 'male';
        this.classList.add('active');
        document.querySelector('.calculate .gender .female').className = 'female';
    }
    
    document.querySelector('.calculate .gender .female').onclick = function() {
        gender = 'female';
        this.classList.add('active');
        document.querySelector('.calculate .gender .male').className = 'male';
    }
    
    document .querySelector('.calculate .height input').onchange = function() {
        height = parseInt(this.value);
        document .querySelector('.calculate .height .val span').innerText = height;
    }
    
    document.querySelector('.calculate .height .val i.add').onclick = function() {
        height += 1;
        height = (height > 220) ? 220 : height;
        document .querySelector('.calculate .height .val span').innerText = height;
        document .querySelector('.calculate .height input').value = height;
    }
    
    document.querySelector('.calculate .height .val i.sub').onclick = function() {
        height -= 1;
        height = (height < 50) ? 50 : height;
        document .querySelector('.calculate .height .val span').innerText = height;
        document .querySelector('.calculate .height input').value = height;
    }
    
    document .querySelector('.calculate .weight input').onchange = function() {
        weight = parseInt(this.value);
        document .querySelector('.calculate .weight .val span').innerText = weight;
    }
    
    document.querySelector('.calculate .weight .val i.add').onclick = function() {
        weight += 1;
        weight = (weight > 180) ? 180 : weight;
        document .querySelector('.calculate .weight .val span').innerText = weight;
        document .querySelector('.calculate .weight input').value = weight;
    }
    
    document.querySelector('.calculate .weight .val i.sub').onclick = function() {
        weight -= 1;
        weight = (weight < 10) ? 10 : weight;
        document .querySelector('.calculate .weight .val span').innerText = weight;
        document .querySelector('.calculate .weight input').value = weight;
    }
    
    document.querySelector('.calculate .calc').onclick = function(){
        let bmi = (weight/ Math.pow(height/100, 2)).toFixed(2);
        height = 50;
        weight = 10;
        document.querySelector('.calculate .weight input').value = weight;
        document.querySelector('.calculate .weight .val span').value = weight;
        document.querySelector('.calculate .height input').value = height;
        document.querySelector('.calculate .height .val span').value = height;
    
        document.querySelector('.result .bmi .val').innerText = bmi;
    
        if (bmi < 18.5){
            document.querySelector('.result .text').innerText = 'YOU ARE UNDERWEIGHT! Therefore please approach towards a training plan below for healthy weight gain'
            document.querySelector('.result .bmi .val').style .color = '#3f51b5';
            document.querySelector('.result .text').style .color = '#3f51b5';
        } else if (bmi >= 18.5 && bmi < 25){
            document.querySelector('.result .text').innerText = 'YOU HAVE A HEALTHY WEIGHT!'
            document.querySelector('.result .bmi .val').style .color = '#0f4';
            document.querySelector('.result .text').style .color = '#0f4';
        } else if (bmi >= 25 && bmi < 30){
            document.querySelector('.result .text').innerText = 'YOU ARE OVERWEIGHT! Therefore please consider the ideal weight reduction program below'
            document.querySelector('.result .bmi .val').style .color = '#ffc107';
            document.querySelector('.result .text').style .color = '#ffc107';
        } else if (bmi >= 30){
            document.querySelector('.result .text').innerText = 'YOU ARE OBESE! Therefore please undergo for an extensive weight reduction program to gain better results'
            document.querySelector('.result .bmi .val').style .color = '#f00';
            document.querySelector('.result .text').style .color = '#f00';
        }
    
        document.querySelector('.calculate').style.display = 'none';
        document.querySelector('.result').style.display ='flex';
    }
    
    document.querySelector('.result .recalc').onclick = function(){
        document.querySelector('.calculate').style.display = 'flex';
        document.querySelector('.result').style.display ='none';
    }
</script>		
	
</body>
</php>