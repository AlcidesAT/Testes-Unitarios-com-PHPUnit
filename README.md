Alunos: Murilo Morosini e Alcides Antonio Lorenski Neto


Reflexão Final

Após a execução da atividade, reflita sobre as seguintes questões:

**- Os testes ajudaram a identificar comportamentos inesperados?**
Sim, pois os testes têm como objetivo principal detectar a presença de erros, ou seja, identificar comportamentos inesperados no sistema.
  
**- Algum teste falhou? Por quê?**
Sim, dois testes falharam:
testIsEvenWithEvenNumber — Falhou porque espera false ao passar 4, mas 4 é par, então a função isEven(4) deveria retornar true.

testFahrenheitToCelsius — Falhou porque espera 5 ao converter 32°F, mas o resultado correto é 0°C.

**- Como os testes podem ajudar na evolução segura do código?**
Os testes ajudam na evolução segura do código porque permitem identificar rapidamente se alguma mudança quebrou funcionalidades já existentes. Eles garantem que o sistema continue funcionando corretamente após alterações, servem como uma documentação do comportamento esperado e dão mais segurança ao desenvolvedor ao fazer refatorações.
