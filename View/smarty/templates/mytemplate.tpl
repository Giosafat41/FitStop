<html> 
<body> 
<h2> Dati utente </h2>

<br> 
 
<b>Risultati per l'utente selezionato: </b> <br>

<select name="mys">
    {section name=nr loop=$results}
        <option value="{$results[nr]->getUsername()}">
                   {$results[nr]->getUsername()} | {$results[nr]->getNome()} | {$results[nr]->getNumTel()}
        </option>
    {/section}
</select>
 
</body> 
</html> 