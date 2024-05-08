<html> 
<body> 
<h2> Codice dei comuni della provincia dell'Aquila </h2>

<br> 
 
<b>Risultati in forma di boh: </b> <br>

<select name="mys">
    {section name=nr loop=$results}
        <option value="{$results[nr]->getUtente()}">
                   | {$results[nr]->getUsername()} | {$results[nr]->getNome()} 
        </option>
    {/section}
</select>
 
</body> 
</html> 