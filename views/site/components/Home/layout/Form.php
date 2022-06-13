


<form action="submit" method="POST" class="collumn center form-input">

<?=$desc?>
<input type="text"  required   required  class="select-1"  <?=$form_style?> name="name" placeholder="Nome">
<input type="text"  required   required  class="select-2"  <?=$form_style?> name="phone" placeholder="Telefone/WhatsApp" >
<input type="text"  required    required  class="select-3" <?=$form_style?> name="email" placeholder="Email">


<select name="empreendimento"  required  class="select-4 none"   <?=$form_style?> placeholder="Qual empreendimento de seu interesse?">
  <option>Qual empreendimento de seu interesse?</option>
  <option>Signature Moema</option>
  <option>Casa Jardins Jaú</option>
  <option>Ambos</option>
</select>

<select name="metragem"  required   class="select-5 none"    <?=$form_style?> placeholder="Qual empreendimento de seu interesse?">
  <option>Qual a metragem desejada?</option>
  <option>Até 100 m2</option>
  <option>100 a 150 m2</option>
  <option>Acima de 150 m2</option>
</select>

<select name="contato"  required  class="select-6 none"   <?=$form_style?> class="select-2" placeholder="Qual empreendimento de seu interesse?">
  <option>Preferência de contato?</option>
  <option>Telefone</option>
  <option>WhatsApp</option>
  <option>E-mail</option>
</select>
<input type="submit"  value="Prosseguir" onclick="nextInputs(event)" class="radius-2 black center upper bold pointer">

</form>
