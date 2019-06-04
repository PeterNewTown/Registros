# Código temporário para ajustes futuros
Não alterar por enquanto.

Esse tutorial considera que o nome de usuario é aluno e o nome da máquina aluno-VirtualBox

# Passo 0 - Instalar dependências com apt
sudo apt-get install python3-venv

# Passo 1 - Criar pasta de trabalho (pular caso já tenha feito)

## 1.1 Confirme que você está na home:
```console
aluno@aluno-VirtualBox:~$ pwd
/home/aluno
```

## 1.2 Crie a pasta de trabalho:
```console
aluno@aluno-VirtualBox:~$ mkdir workspace
aluno@aluno-VirtualBox:~$ cd workspace
aluno@aluno-VirtualBox:~/workspace$
```

## 1.3 Clone do projeto na pasta de trabalho:
```console
aluno@aluno-VirtualBox:~/workspace$ git clone https://github.com/PeterNewTown/tads-bd2191-registros.git
```

# Passo 2 - Criar ambiente virtual (pular caso já tenha feito)

## 1.1 Confirme que você está na pasta workspace:
```console
aluno@aluno-VirtualBox:~/workspace$ pwd
/home/aluno/workspace
```

## 1.2 Acessar pasta do projeto e criar venv:
```console
aluno@aluno-VirtualBox:~/workspace$ cd tads-bd2191-registros
aluno@aluno-VirtualBox:~/workspace/tads-bd2191-registros$ python3 -m venv venv
```
## 1.3 Ativar venv:
```console
aluno@aluno-VirtualBox:~/workspace/tads-bd2191-registros$ source venv/bin/activate
(venv) aluno@aluno-VirtualBox:~/workspace/tads-bd2191-registros$
```

