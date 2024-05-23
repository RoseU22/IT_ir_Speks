<?php require 'header.php'; ?>


<h1>Jaunumu & Vakanšu pārvaldīšana</h1>
<section class="pievienosana">
    <button onclick='closePopup()' class='btn'>Pievienot vakansi</button>
    <button onclick="openPopup()" class='btn'>Pievienot jaunumu</button>
</section>


<section class="tables">
    <div class='table-selection'>
        <button id='btn1' class="btn selected">Vakanses</button>
        <button id='btn2' class="btn">Jaunumi</button>
    </div>
    <table id='table1'>
        <tr>
            <th>Nr.</th>
            <th>Nosaukums</th>
            <th>Apraksts</th>
            <th>Dzēst</th>
        </tr>
        <tr>
            <td>1</td>
            <td>IT skolotājs</td>
            <td>Apmāca jaunos tehnikuma audzēkņus vispusīgi IT</td>
            <td><button class="btn"><i class="fa-solid fa-pen-to-square"></i></button> | <button class='btn'> <i class='fas fa-trash'></i></button></td>
        </tr>
        <tr>
            <td>2</td>
            <td>Prompt engineer</td>
            <td>Izmanto AI texta redaktorus lai uzlabotu kodu sistēmā</td>
            <td><button class="btn"><i class="fa-solid fa-pen-to-square"></i></button> | <button class='btn'> <i class='fas fa-trash'></i></button></td>
        </tr>
    </table>
    <table id='table2' class='hidden'>
        <tr>
            <th>Nr.</th>
            <th>Nosaukums</th>
            <th>Apraksts</th>
            <th>Dzēst</th>
        </tr>
        <tr>
            <td>1</td>
            <td>Konkurss google CEO pozicijai</td>
            <td>google piedāvā CEO poziciju jebkuram, kurš varēs iegūt 100% matenes eksāmenā!</td>
            <td><button class="btn"><i class="fa-solid fa-pen-to-square"></i></button> | <button class='btn'> <i class='fas fa-trash'></i></button></td>
        </tr>
        <tr>
            <td>2</td>
            <td>AI saiets liepājā</td>
            <td>Nekas īpaš, tikai atkal cilvēki saies kopā un ķipa runās pa AI.</td>
            <td><button class="btn"><i class="fa-solid fa-pen-to-square"></i></button> | <button class='btn'> <i class='fas fa-trash'></i></button></td>
        </tr>
    </table>
</section>

<script>
    // Get references to the buttons
    const button1 = document.getElementById('btn1');
    const button2 = document.getElementById('btn2');
    const table1 = document.getElementById('table1');
    const table2 = document.getElementById('table2');

    // Add event listeners for click events
    button1.addEventListener('click', () => {
      button1.classList.add('selected');
      button2.classList.remove('selected');
      table1.classList.remove('hidden');
      table2.classList.add('hidden');
    });

    button2.addEventListener('click', () => {
      button2.classList.add('selected');
      button1.classList.remove('selected');
      table2.classList.remove('hidden');
      table1.classList.add('hidden');
    });
  </script>


