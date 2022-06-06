


<form action="submit" method="POST" class="collumn center">

<?=$desc?>
<input type="text"  required  <?=$form_style?> name="name" placeholder="Nome" onclick="showInputs()">
<input type="text"  required   <?=$form_style?> name="phone" placeholder="Telefone/WhatsApp" onclick="showInputs()">
<input type="text"  required   <?=$form_style?> name="email" placeholder="Email" onclick="showInputs()">


<select name="empreendimento" required  <?=$form_style?> class="select-1" placeholder="Qual empreendimento de seu interesse?">
  <option>Qual empreendimento de seu interesse?</option>
  <option>Signature Moema</option>
  <option>Casa Jardins Jaú</option>
</select>

<select name="metragem"  required   <?=$form_style?> placeholder="Qual empreendimento de seu interesse?">
  <option>Qual a metragem desejada?</option>
  <option>Até 100 m2</option>
  <option>de 100 a 150 m2</option>
  <option>Acima de 150 m2</option>
</select>

<select name="contato"  required   <?=$form_style?> class="select-2" placeholder="Qual empreendimento de seu interesse?">
  <option>Preferência de contato?</option>
  <option>Telefone</option>
  <option>WhatsApp</option>
  <option>E-mail</option>
</select>
<input type="submit"  placeholder="Enviar" class="radius-2 black center upper bold pointer">

</form>
