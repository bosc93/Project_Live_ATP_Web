<head>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    
    
    <link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet">
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    
</head>

<body>
    <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Age</th>
                <th>Start date</th>
                <th>Salary</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Tiger Nixon</td>
                <td>System Architect</td>
                <td>Edinburgh</td>
                <td>61</td>
                <td>2011/04/25</td>
                <td>$320,800</td>
            </tr>
            <tr>
                <td>Garrett Winters</td>
                <td>Accountant</td>
                <td>Tokyo</td>
                <td>63</td>
                <td>2011/07/25</td>
                <td>$170,750</td>
            </tr>
            <tr>
                <td>Ashton Cox</td>
                <td>Junior Technical Author</td>
                <td>San Francisco</td>
                <td>66</td>
                <td>2009/01/12</td>
                <td>$86,000</td>
            </tr>
        </tbody>
    </table>
</body>

<script>
    $(document).ready(function() {
        $('#example').DataTable();
    } );
    
    var cpt = 0;

        snapshot.forEach(function(data){

            var val = data.val();

            var idJoueurH = val.idPlayerScore;
            
            var tr = document.createElement('tr');
            $('#row_tuile').appendChild(tr);
            
            var td = document.createElement('td');
            tr.appendChild(td);
            var nom = document.createTextNode(val.nom);
            td.appendChild(nom);
            
            tr.appendChild(td);
            var prenom = document.createTextNode(val.prenom);
            td.appendChild(prenom);
            
            tr.appendChild(td);
            var codeNationalite = document.createTextNode(val.codeNationalite);
            td.appendChild(codeNationalite);
            
            tr.appendChild(td);
            var dateNaissance = document.createTextNode(val.dateNaissance);
            td.appendChild(dateNaissance);
            
            tr.appendChild(td);
            var idPlayerScore = document.createTextNode(val.idPlayerScore);
            td.appendChild(idPlayerScore);
            
            
            tr.appendChild(td);
            var main = document.createTextNode(val.main);
            td.appendChild(main);

            cpt++;

        });
       

     }, function (error) {

        console.log("Error: " + error.code);

     });
</script>

