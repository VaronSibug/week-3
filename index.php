<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MAKDU</title>
    <link rel="stylesheet" href="styles.css">
</head>

<header>MCDUNALDS</header>
<body>



    <div class="container">
       <h1>Makdunals menu</h1>
       <form method="post" action="order.php">
        <label for="name">Customer Name:</label>
        <input type="text" id="name" name="name" required>


        <label for="chicken">Chicken</label>
        <select name="chicken" id="chicken"> required
            <option value="none">none</option>
            <option value="chicken nakaupo">Chicken nakaupo - ₱50</option>
                <option value="chicken nakatayo">chicken nakatayo - ₱25</option>
                <option value="chicken nakasplit">chicken nakasplit - ₱20 </option>
                <option value="chicken nakahilata">chicken nakahilata - ₱30</option>
                <option value="chicken nakadapa">chiken nakadapa - ₱35</option>

                
        </select>
        
      
        



    

         <label for="BURGER">Burger</label>
         <select name="BURGER" id="BURGER"> optional
            <option value="none">none</option>
         <option value="burger ng kalabaw">burger ng kalabaw - ₱50 </option>
         <option value="burger ni juswa">burger ni juswa - ₱100</option>
         <option value="burger ng anghel">burger ng anghel - ₱65</option>
         <option value="burger spesyal">burger spesyal - ₱120</option>
           </select>
          

           
    



    <label for="drinks">Drinks</label>
    <select name="drinks" id="drinks">
    <option value="none">none</option>
    <option value="koke">koke - ₱20</option>
    <option value="esprit">esprit - ₱20</option>
    <option value="tubeg">tubeg - ₱10</option>
    <option value="kape">kape - ₱15</option>
    <option value="kukeflut">kukeflut - ₱50</option>
    
    </select>

    

 


       <labelq for="frais">frais</label>
         <select name="frais" id="frais">
             <option value="none">none</option>
          <option value="cheese frais">cheese frais - ₱ 20</option>
           <option value="bbq frais">bbq frais - ₱21</option>
       <option value="sweetnsour">sweet and sour frais - ₱25</option>
       
       
        </select>
        
      





<label for="instructions"> Special Instructions:</label>
            <textarea id="instructions" name="instructions" rows="4"></textarea>
<button id="submit">Place Order</button>  </button>
</div>
</form>
</div> 

</body>

</html>