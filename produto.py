def coletar_informacoes():
    
    nome = input("Qual é o seu nome completo? ")
    preco = input("Qual o Preço do produto ? ")
    categoria = input("Em que Categoria pertence? ")
    estoque = input("Qual a quantidade disponível no Estoque? ")
    validade = input("Você poderia descrever um ? ")

    print("\nInformações coletadas:")
    print(f"Nome Completo: {nome}")
    print(f"Idade: {preco}")
    print(f"Cidade: {categoria}")
    print(f"Profissão: {estoque}")
    print(f"Hobby/Atividade: {validade}")

coletar_informacoes()