<?php require 'header.php'?>
    <h1>Darbinieku pārvaldīšana</h1>

    <div class="form-box"> 
        <div class="textup"> 
            
            Pievienot darbinieku 
        </div> 
        <form> 
            <label for="uname"> 
                <i class="fa fa-solid fa-user"></i> 
                Vards 
            </label> 
            <input type="text"  
                   name="uname" required>
            <label for="surname"> 
                <i class="fa fa-solid fa-user"></i> 
                Uzvards 
            </label> 
            <input type="text" 
                   name="surname" required>  
            <label for="email"> 
                <i class="fa fa-solid fa-envelope"></i> 
                Epasts 
            </label> 
            <input type="email" 
                   name="email" required> 
  
            <label for="phone"> 
                <i class="fa-solid fa-phone"></i> 
                Talrunis 
            </label> 
            <input type="tel"  
                   name="phone" required>
                <label for="adrese">
                    <i class="fa-solid fa-location-dot"></i>
                    Adrese
                </label>
                <input type="text" name="adrese" required> 
            <label> 
                <i class="fa-solid fa-user-tie"></i>
                Grupa 
           </label> 
            <div class="radio-group"> 
                <input type="radio" 
                       name="grupa" value="admin" checked> 
                <label for="admin">admin</label> 
  
                <input type="radio" 
                       name="grupa" value="user"> 
                <label for="user">User</label> 
            </div> 
  
            <button type="submit"> 
                Submit 
            </button> 
        </form> 
    </div> 

    <section class='tables'>
    <table>
        <tr>
            <th>ID</th>
            <th>Vards</th>
            <th>Uzvards</th>
            <th>Talrunis</th>
            <th>Epasts</th>
            <th>Adrese</th>
            <th>Grupa</th>
            <th></th>
        </tr>
        <tr>
            <td>1</td>
            <td>Valdis</td>
            <td>Vecva</td>
            <td>233765345</td>
            <td>a@a.a</td>
            <td>ventspils iela 6</td>
            <td>admin</td>
            <td><button class="btn"><i class="fa-solid fa-pen-to-square"></i></button> | <button class='btn'> <i class='fas fa-trash'></i></button></td>
        </tr>
        <tr>
            <td>2</td>
            <td>Liene</td>
            <td>Ritka</td>
            <td>233765245</td>
            <td>b@b.b</td>
            <td>ventspils iela 6</td>
            <td>user</td>
            <td><button class="btn"><i class="fa-solid fa-pen-to-square"></i></button> | <button class='btn'> <i class='fas fa-trash'></i></button></td>
        </tr>
    </table>
    </section>

    
    
</body>
</html>