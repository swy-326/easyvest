:books: EasyVest
===================================================

Website desenvolvido para a disciplina Fundamentos de Sistemas de Informação (ACH2014) <br>
Prof. Luciano Araújo, 2020 - 1º Semestre <br><br>

Ahmad Kamel - 11795825 <br>
Beatriz Abreu - 11795846 <br>
Luiza Borghi - 11796037 <br>
Sungwon Yoon - 9822261 <br><br>

Link do Site : http://easyvest.byethost9.com/<br>
Histórico de Commits : [1º](http://github.com/swy-326/web3.0), [2º](http://github.com/swy-326/wptheme_fsi), [3º](http://github.com/swy-326/backupDefinitivo) <br><br>




Introdução
------------------------------------------
A EasyVest é uma iniciativa de um grupo de estudantes da Universidade de São Paulo que visam contribuir com a democratização do acesso ao ensino no nosso país.
<br><br>
Nesta plataforma, podem ser encontradas as principais informações dos maiores vestibulares do Estado de São Paulo, com o conteúdo completamente gratuito e disponível para todos que tiverem interesse em conquistar a tão aguardada vaga na instituição de ensino dos sonhos. <br><br>
### Vídeo de apresentação (Youtube)
Apresentação de andamento : <p>
[![Apresentação de andamento](http://img.youtube.com/vi/-XXod_Bd8VQ/0.jpg)](http://www.youtube.com/watch?v=-XXod_Bd8VQ) <br><br>
Apresentação final : <p>
[![Apresentação Final](http://img.youtube.com/vi/WPrRJIcfsgU/0.jpg)](https://www.youtube.com/watch?v=WPrRJIcfsgU)



Estrutura básica do site
---------------------------------------------
![Estrutura básisca](https://github.com/swy-326/backupDefinitivo/raw/master/readme_img/structure.png)

<code>#skip</code>
Skip Navigation para acessibilidade de web <br>

<code>#header_1</code>
Header principal do site <br>

<code>#header_2</code>
Header secundário em que indica o que contém no #nav_1 e #nav_2  <br>
Quando o width do site se torna menor que 600, esconde div é escondido <br>

<code>#nav_1</code>
Menu onde se dispõe das opções da qual deseja obter informação <br>

<code>#nav_2</code>
Contém hyperlinks do .cont-cont <br>

<code>#contents</code>
Parte onde se mostra a informação da opção selecionada <br>
.cont-title : Nome completo da Universidade / Enem <br>
.cont-cont : Todos as informações  <br>

<code>#footer</code>
Footer e copyright <br>


Directory
------------------------------------
```
easyvest.byethost9.com
｜― index.php
｜― reset.css
｜― style.css
｜― template.php
｜― univ
  ｜― // php das paginas das universidades
  ｜― contents
    ｜― // conteudo armazenados em html
｜― calendar
  ｜― // php da pagina calendario
  ｜― fullcanlendar
    ｜― lib
      ｜― // main.html do fullcalendar
｜― fonts
  ｜― // fontes em eot, svg, woff, woff2
｜― images
  ｜― // favicon.ico, logo.png, etc
｜― js
 ｜― effects.js
 ```


License / Recursos utilizados
------------------------------------------------
- Fonte <br>
https://fonts.google.com/specimen/Noto+Sans+JP <br>
https://google-webfonts-helper.herokuapp.com/fonts  <p>
  
- Full Calendar <br>
https://fullcalendar.io/ <p>

- Barra de Rolagem <br>
Modificado de https://codepen.io/devstreak/pen/dMYgeO  <p>

- Icon <br>
https://thenounproject.com/term/book-and-pencil/3271225 
  


Ambientes testados
------------------------------
PC (Windows 10) - Microsoft Edge 83.0.478.58 <br>
Android 6.0.1 - Samsung Internet Browser Beta 12.1.1.5, Chrome 75.0.3770.101 <br>
IOS 12.4.7 - Safari <br><br>


Bugs não resolvidos
----------------------------------
- Google Calendar URL <p>
  - A cookie associated with a cross-site resource at http://google.com/ was set without the `SameSite` attribute. A future release of Microsoft Edge will only deliver cookies with cross-site requests if they are set with `SameSite=None` and `Secure`. You can review cookies in developer tools under Application>Storage>Cookies and see more details at https://www.chromestatus.com/feature/5088147346030592 and https://www.chromestatus.com/feature/5633521622188032.<br>
  - Tracking Prevention blocked access to storage for \<URL\>. <br>
  - Refused to display 'https://www.google.com/?gws_rd=ssl' in a frame because it set 'X-Frame-Options' to 'sameorigin' <br>
  
```
https://calendar.google.com/calendar/r/eventedit?
    text=Inscrição+ENEM
    &dates=20200703T193000Z/20201231T223000Z
    &details=Hoje
```
