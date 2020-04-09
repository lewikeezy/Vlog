<?php
    include_once('lib/header.php');
    ?>
    
    <p><strong>Sign up if you do not have an account yet</strong></P>
    <p> Note that all fields are required</p>

     <form action="processregister.php" method="post">

     <p>
       <label>First Name</label><br />
       <input type="text" name="first_name" placeholder ="First Name" required />
       </p>
          
       <p>
       <label>Last Name</label><br />
       <input type="text" name ="last_name" placeholder ="Last Name" required />
       </p>

       <p>
       <label>Email</label> <br />
       <input type="text" name ="email" placeholder ="Email" required />
       </p>

       <p>
       <label>Dept</label> <br />
       <input type="text" name ="dept" placeholder ="Dept" required />
       </p>

          
       <p>
       <label>Level</label> <br />
       <select name="level" required>
       <option value="">Select one</option>
       <option >100</option>
       <option >200</option>
       <option >300</option>
       <option >400</option>
       <option >500</option>
       <option >600</option>
       </select>
       </P>

       <p>
       <label>Phone Number</label> <br />
       <input type="text" name ="phone_number" placeholder = "Phone Number" required/>
       </p>

       <p>
       <label>Gender</label> <br />
       <select name ="gender" required>
       <option value="">Select one</option>
       <option >Male</option>
       <option >Female</option>
       </select>
       </P>


       <p>
       <label>Password</label> <br />
       <input type="password" name ="password" placeholder ="Password" required/>

       <p> <br />
       <button type="submit">Sign Up</button>
       </p>

     </form>

<?php
    include_once('lib/footer.php');
    ?>
    