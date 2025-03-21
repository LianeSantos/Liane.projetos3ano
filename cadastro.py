def coletar_informacoes():
    
    nome = input("Qual é o seu nome completo? ")
    cargo = input("Qual é seu Cargo? ")
    empresa = input("Qual o nome da Empresa? ")
    salario = input("Qual o seu Salário atual? ")
    tempo = input("A quanto tempo você trabalha nesta Empresa? ")
    
    print("\nInformações coletadas:")
    print(f"Nome Completo: {nome}")
    print(f"Cargo: {cargo}")
    print(f"Nome da Empresa: {empresa}")
    print(f"Salário: {salario}")
    print(f"Tempo de Trabalho: {tempo}")

coletar_informacoes()