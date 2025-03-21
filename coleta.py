def coletar_informacoes():
    
    nome = input("Qual é o seu nome completo? ")
    idade = input("Qual é a sua idade? ")
    cidade = input("Em que cidade você mora? ")
    profissao = input("Qual a sua profissão? ")
    hobby = input("Você poderia descrever um hobby ou atividade que gosta de fazer? ")

    print("\nInformações coletadas:")
    print(f"Nome Completo: {nome}")
    print(f"Idade: {idade}")
    print(f"Cidade: {cidade}")
    print(f"Profissão: {profissao}")
    print(f"Hobby/Atividade: {hobby}")

coletar_informacoes()