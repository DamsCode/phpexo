<form action="genrepage.php" method="get">
    <p>Boys or Girl ?</p>
    <input type="radio" id="idboys" name="genre" value="Boys">
    <label for="idgenre">Boys</label>
   
    <input type="radio" id="idgirl" name="genre" value="Girl">
    <label for="idgenre">Girl</label>
      
    <p>Votre âge : <input type="text" name="age" /></p>
     
      <p>Do you speak English ?</p>
     <div>
        <input type="radio"id="yes" name="ques" value="yes">
        <label for="yes">Yes</label>
     </div>

   <div>
        
        <input type="radio" id="no" name="ques" value="no">
        <label for="no">No</label>
   </div>

 <p><input type="submit" value="OK"></p>

</form>