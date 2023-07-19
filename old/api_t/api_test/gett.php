<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        th, td,tbody, caption {
    border: 1px solid #5218d0;
    border-collapse: collapse;
    padding: 0.5rem;
}
    </style>
    <title>get data api</title>
</head>
<body>
    <h1>get data api</h1>

    <table>
        <tr>
            <th>ID</th>
            <th>city</th>
            <th>phone</th>
            <th>website</th>
            <th>email</th>

        </tr>
        <tbody class="tbody">
        </tbody>
    </table>
    <script>
      async function loadData (){
    const url = 'https://api.healthserv.gistnu.nu.ac.th/surveys';
    const response = await fetch(url);
    const data = await response.json();
    let userInfo = document.querySelector(".tbody");
    
    data.forEach(element => {
        const{id , sex , answerer , age,date_time} = element;

        console.log(element['result']);
        
        let newRow = 
        `
        <tr>
        <td>${id}</td>
        <td>${sex}</td>
        <td>${answerer}</td>
        <td>${age}</td>
        <td>${date_time}</td>



        </tr>
        `
        userInfo.innerHTML += newRow
   
    });
}

loadData()
    </script>        
</body>
</html>