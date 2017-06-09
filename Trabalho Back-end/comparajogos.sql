CREATE DATABASE COMPARAJOGOS;

CREATE TABLE NOTICIAS(
    ID INTEGER NOT NULL PRIMARY KEY,
    TITLE VARCHAR(120) NOT NULL,
    NDATA VARCHAR(32) NOT NULL,
    TEXTO VARCHAR(8000) NOT NULL,
    RESUMONOTICIA VARCHAR(256) NOT NULL,
    FONTES VARCHAR(120) NOT NULL,
    LINKFONTE VARCHAR(2048) NOT NULL,
    NOMEFONTEIMAGENS VARCHAR(120) NOT NULL,
    LINKIMAGEM VARCHAR(2048) NOT NULL,
    NOMEIMAGEM VARCHAR(32) NOT NULL
);

CREATE TABLE JOGO(
    ID INTEGER NOT NULL PRIMARY KEY,
    NAME VARCHAR(32) NOT NULL,
    LANCAMENTO VARCHAR(32) NOT NULL,
    TEXTO VARCHAR(8000) NOT NULL,
    NOMEIMAGEMARTIGO VARCHAR(32) NOT NULL,
    FONTE VARCHAR(120) NOT NULL,
    LINKFONTE VARCHAR(2048) NOT NULL,
    NAMECAPA VARCHAR(32) NOT NULL,
    GRAFICOS INTEGER NOT NULL,
    JOGABILIDADE INTEGER NOT NULL,
    DIVERSAO INTEGER NOT NULL,
    SOM INTEGER NOT NULL,
    PROS VARCHAR(512) NOT NULL,
    CONTRAS VARCHAR(512) NOT NULL,
    PLATAFORMA VARCHAR(80) NOT NULL
);

CREATE TABLE ESPORTS(
    ID INTEGER NOT NULL,
    NOMEGAME VARCHAR(32) NOT NULL,
    TEXTO VARCHAR(2000) NOT NULL,
    FOREIGN KEY (ID) REFERENCES JOGO(ID)
);

CREATE TABLE DESTAQUEINDEX(
    ID INTEGER NOT NULL,
    DESTAQUE VARCHAR(32) NOT NULL,
    LINKVIDEO VARCHAR(1000) NOT NULL,
    FOREIGN KEY (ID) REFERENCES JOGO (ID)
);

CREATE TABLE MENSAGEMCONTATO(
    ID INTEGER NOT NULL PRIMARY KEY,
    NOME VARCHAR(32) NOT NULL,
    EMAIL VARCHAR(32) NOT NULL,
    MENSAGEM VARCHAR(3000) NOT NULL
);

    SELECT NAME FROM JOGO INNER JOIN DESTAQUEINDEX ON JOGO.ID = DESTAQUEINDEX.ID;

    INSERT INTO DESTAQUEINDEX VALUES(1, 'ARMA III',  'https://www.youtube.com/embed/-pUhraVG7Ow?rel=0');

    INSERT INTO JOGO VALUES(1, 'ARMA III',  '03-05-2012', '                    <p>Arma 3, desenvolvido pela Bohemia Interactive é um dos melhores jogos do mercado para quem procura um verdadeiro simulador militar. Com um visual e uma jogabilidade ainda melhores do que aqueles de seus predecessores, o jogo parece tentar ser um grande sandbox para todo tipo de campanha militaresca, que tende apenas a crescer mais conforme a comunidade for produzindo mais conteúdo para o mesmo.</p>

                        <p>O mundo de Arma 3 é situado em um pequeno arquipélago no mar Egeu, com cerca de 270 Km de extensão, incluindo grandes planícies, e as regiões profundas do oceano. Os jogadores terão a sua disposição todo tipo de veículo militar, de caças a submarinos, passando por clássicos do gênero como tanques de guerra. Situado em 2030, quase todos os veículos ainda são reconhecíveis, apesar de muita coisa nova que hoje em dia ainda se encontra em desenvolvimento dando muito liberdade criativa para os desenvolvedores.</P>

                        Jogabilidade
                        <p>Arma 3 funciona em grande parte como um jogo normal de tiro em primeira pessoa. A grande diferença se encontra na preparação para o mesmo, já que você poderá armar verdadeiros planos de combate, coordenar operações que envolvam dezenas de veículos e muito mais. O jogo também oferece um bom modo de treinamento para quem não está familiarizado com os seus comandos.
                        O principal destaque de Arma 3 é o seu editor de cenários e de campanha, fazendo com que todos os jogadores tenham acesso a dezenas de cenários diferentes, tornando o jogo sempre novo e instigante. Tudo isso é feito através do Steam Workshop, que torna o processo ainda mais fácil, já que você não precisará de se registrar em sites de mods ou semelhantes.</p>
                        <p>Infelizmente, Arma 3 ainda não teve o seu modo single-player (ou a campanha oficial) lançado, e no momento ele existe apenas como um jogo de guerra em sandbox, com campanhas criadas por outros usuários.</p>

                        Apresentação
                        <p>Arma 3 é um dos mais belos jogos para PC, com gráficos para invejar os fãs de Crysis. Da escala dos combates até o realismo evidenciado pelo movimento da água e da grama.</p>
                        <p>A interface dos menus, a organização do editor e toda a identidade visual do jogo, mostra que os desenvolvedores tiveram uma preocupação em criar um produto coeso e funcional para que todos conseguissem utilizar com facilidade. Da criação de mapas, até a concepção de planos de ataque ou batalha, tudo é muito intuitivo e fácil de usar.</p>
                        <p>O áudio do jogo também é de excelente qualidade, graças a efeitos sonoros com um forte sentido de realismo. O maior problema de Arma 3 é que o seu framerate sofre muito em computadores que não sejam top de linha, e até agora nenhum patch conseguiu corrigir verdadeiramente este erro.</p>
                        Conclusão
                        <p>Arma 3 é o jogo definitivo da série combinando tudo o que os desenvolvedores aprenderam ao longo dos anos. Um dos melhores jogos de tiro em primeira pessoa unido de uma comunidade incrível que sabe se aproveitar de seu editor de campanhas para criar conteúdos tão bons quanto os oficiais.</p>
', 'arma3.jpg', 'TechTudo', 'http://www.techtudo.com.br/review/arma-3.html', 'arma3.jpg', '9', '2', '8', '5', 'Pros', 'Contras', 'PC, PS4');

ID	TITLE	NDATA	TEXTO	RESUMONOTICIA	FONTES	LINKFONTE	NOMEFONTEIMAGENS	LINKIMAGEM	NOMEIMAGEM

INSERT INTO NOTICIAS VALUES(1, 'Star Wars Battlefront II não terá Season Pass, mas terá Early Access', '19 ABR 2017 - 17H00', '<p id="text">
    &emsp;&emsp;Não adianta: o sistema de passe de temporada é algo comum atualmente, mas ele ainda não desce pela garganta de muita gente. Afinal, trata-se de um modelo que cobra previamente por conteúdo extra de um jogo que, muitas vezes, nem foi lançado ainda. Parece que a EA está aprendendo com os erros e decidiu: Star Wars Battlefront II não terá Season Pass.
    <br><br>&emsp;&emsp;Se você se lembra, o primeiro jogo foi muito incrível e trouxe bastante conteúdo interessante, mas se visto por um escopo maior, trazia poucos mapas, heróis e armas, algo que só foi suprido com DLCs pagas ao longo do tempo. Por conta disso, o segundo game não seguirá essa fórmula. Ou pelo menos é isso que está imperando até o momento.
    <br><br>&emsp;&emsp;Alguns executivos da EA Games não quiseram confirmar, enquanto outros disseram que o game não terá o passe de temporada. A própria pré-venda ressalta isso, já que não teremos as três versões padrão: normal, deluxe e ultimate. Mas isso não quer dizer que a EA não pensa em outras formas de ganhar dinheiro extra com o título de Star Wars.
    <br><br>&emsp;&emsp;“Quando olhamos como Battlefront se desenvolveu, com as DLCs e tudo mais, nós decidimos que que para esse tipo de jogo, o passe de temporada não é a melhor coisa. Nós precisamos tirar isso e colocar algo melhor”, explicou o diretor Bernd Diemer.
    <br><br>&emsp;&emsp;Atualmente, Battlefront II tem uma edição mais cara que oferece Early Access, permitindo que os jogadores desfrutem da experiência alguns dias antes do lançamento oficial. Star Wars Battlefront II chega no dia 17 de novembro para PC, Xbox One e PlayStation 4 (dia 9 para membros do Early Access).
</p>', 'Não adianta: o sistema de passe de temporada é algo comum atualmente, mas ele ainda não desce pela garganta de muita gente. Afinal, trata-se de um modelo que cobra previamente por conteúdo extra de um jogo que, muitas vezes, nem foi lançado ainda.', 'GAMEPUR', 'http://www.gamepur.com/news/26439-star-wars-battlefront-ii-not-coming-season-pass-early-access-confirmed.html', 'ORIGIN', 'https://www.origin.com/bra/pt-br/store/star-wars/star-wars-battlefront-2/deluxe-edition', 'star.jpg ');


INSERT INTO ESPORTS VALUES(1, 'CALL OF DUTY: INFINITE WARFARE', '<p>CWL Atlanta Open: 10 a 12 de fevereiro
<br>CWL Dallas Open: 17 a 19 de março
<br>CWL Global Pro League - Qualificatória Online: 19 a 21 de maio
<br>CWL Global Pro League - Playoff de Rebaixamento: 15 de junho
<br>CWL Anaheim: 16 a 18 de junho
<br>CWL Global Pro League 2ª Etapa: 29 de junho a 30 de julho
<br>CWL Championship (Mundial) - Qualificatória da América do Norte: 25 de julho
<br>CWL Championship (Mundial): agosto</p>
<br><br>
<h4>COUNTER-STRIKE: GLOBAL OFFENSIVE</h4>
<p>ESL Pro League - Temporada regular: 7 de fevereiro a 11 de maio
<br>DreamHack Masters Las Vegas: 15 a 19 de fevereiro
<br>ESL Brasil Premier League - Qualificatórias: 19 e 25 de fevereiro
<br>ECS - Liga de desenvolvimento: 28 de fevereiro a 16 de março
<br>IEM Katowice: 1º a 5 de março
<br>SL i-League StarSeries - Qualificatória das Américas: 6 a 21 de março
<br>Copa Brasil - Temporada regular: 20 de março a 14 de agosto
<br>ESL Brasil Premier League - Temporada regular: 24 de março a 12 de maio
<br>ECS - Série de promoção das Américas: 25 e 26 de março
<br>SL i-League StarSeries: 4 a 9 de abril
<br>BGC Rio - Final: 9 de abril
<br>ECS - Temporada regular: 14 de abril a 8 de junho
<br>CS Summit: 20 a 23 de abril
<br>IEM Sydney: 6 e 7 de maio
<br>DreamHack Tours: 6 e 8 de maio
<br>Esea Global Challenge: 13 e 14 de maio
<br>ESL Brasil Premier League - Finais: a definir
<br>ESL Pro League - Finais: 3 e 4 de junho
<br>Major de Cracóvia - Minor das Américas: 8 a 11 de junho
<br>DreamHack Summer: 17 e 18 de junho
<br>ECS - Finais: 24 e 25 de junho
<br>Gamers Club Masters: junho
<br>Major de Cracóvia (Mundial) - Qualificatória presencial: 29 de junho a 2 de julho
<br>ESL One Colônia: 7 a 9 de julho
<br>Major de Cracóvia (Mundial): 16 a 23 de julho
<br>DreamHack Atlanta: 21 a 23 de julho
<br>ESL Pro League - Temporada regular: agosto a novembro
<br>DreamHack Masters Malmö: 30 de agosto a 3 de setembro
<br>DreamHack Montreal: 8 a 10 de setembro
<br>ESL One Nova York: 16 e 17 de setembro
<br>DreamHack Denver: 20 a 22 de outubro
<br>DreamHack Winter: 30 de novembro a 2 de dezembro
<br>ESL Pro League - Finais: dezembro</p>
<br>');


INSERT INTO JOGO VALUES('2','CALL OF DUTY BLACK OPS', '30-11-2011', '<p>
    &emsp;&emsp; Call of Duty é um nome extremamente importante para a indústria dos games. Suas novas versões, lançadas ano após ano pela Activision, batem cada vez mais recordes de vendas e angariam milhares de jogadores para as viciantes partidas online. O capítulo mais recente, Call of Duty: Black Ops, repete o sucesso e entrega aos fãs uma aventura digna da série.<br>
    &emsp;&emsp; Call of Duty: Black Ops é um importante título não só para a série e a famosa marca, mas também para sua produtora, a Treyarch. Este é o primeiro Call of Duty desenvolvido por ela que não se passa durante a Segunda Guerra Mundial, e sim em um período histórico mais recente. Só este ponto já é uma boa novidade para os fãs que estavam cansados do cenário anterior.
</p>
<br>', 'codblackops.png', 'TechTudo','http://www.techtudo.com.br/review/call-of-duty-black-ops.html', 'codblackops.png', '10', '9', '7','8', '<p>
    - Narrativa cinematográfica.<br>
    - Modo multiplayer bem completo.<br>
    - Pacote recheado com extras.<br>
    - Nada de Segunda Guerra, temos um cenário totalmente inédito.<br>
</p>', '<p>
    - Gráficos medianos no multiplayer.<br>
    - História muito curta.<br>
    - Menus do multiplayer confusos.<br>
</p>', 'PC,PS3, XBOX ONE');
