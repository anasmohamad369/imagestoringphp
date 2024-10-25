<HTML>
    <head>
        <title>UPLOAD PAGE</title>
    </HEAD>
     <style>
        table, th, td {
          border: 1px solid black;
       
       }
       table{
        background-color: #F9F5EB;
        text-align: center;
       }
       th{
        text-align: center;
       }
       tr:nth-child(even) {
  background-color: #a9a9a9;
}
h5{
    color: white;
    text-align: center;
}

     </style>
    <BODY>
        <table class='table table-center text-center'>
        <form action="upload.php" method="post" enctype="multipart/form-data">
            <h5 >upload your Memories here</h5></br>
            <tr>

                <th align="center">Image ID</th>
            <td align="center"><input type="text" name="imageid" placeholder="Image ID"></td>
           </tr>
           
           <tr>
           <th align="center">Dateofupload</th>
            <td align="center"><input type="date" name="dateofupload" placeholder="Date of Upload"></td>
</tr>
           <tr>
            <th align="center">Description</th>
            <td align="center">
            <textarea  placeholder="description" name="description" cols="43" rows="5" ></textarea></td>
             </tr>
   
             <tr>
             <th align="center">photo</th>
            <td align="center"><input type="file" name="photo"></td>
        </tr>
    
        <tr>
           <td colspan="2" align="center"> 
            <input type="submit" name="submit" value="Upload"></td>
        </tr>
        </form>
        </table>
    </BODY>
</HTML>