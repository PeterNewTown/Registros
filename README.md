# Código temporário para ajustes futuros
Não alterar por enquanto.

Esse tutorial considera que o nome de usuario é aluno e o nome da máquina aluno-VirtualBox

# Passo 0 - Instalar dependências com apt
```console
aluno@aluno-VirtualBox:~$ sudo apt-get install python3-venv
```

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

## 2.1 Confirme que você está na pasta workspace:
```console
aluno@aluno-VirtualBox:~/workspace$ pwd
/home/aluno/workspace
```

## 2.2 Acessar pasta do projeto e criar venv:
```console
aluno@aluno-VirtualBox:~/workspace$ cd tads-bd2191-registros
aluno@aluno-VirtualBox:~/workspace/tads-bd2191-registros$ python3 -m venv venv
```
## 2.3 Ativar venv:
```console
aluno@aluno-VirtualBox:~/workspace/tads-bd2191-registros$ source venv/bin/activate
(venv) aluno@aluno-VirtualBox:~/workspace/tads-bd2191-registros$
```


# 3 Instalando dependências e configurando ambiente

##Instalando dependências
```console
(venv) aluno@aluno-VirtualBox:~/workspace/tads-bd2191-registros$ pip install --upgrade pip
(venv) aluno@aluno-VirtualBox:~/workspace/tads-bd2191-registros$ pip install -r requirements.txt
```

## 3.1 variáveis de ambiente
```console
(venv) aluno@aluno-VirtualBox:~/workspace/tads-bd2191-registros$ export FLASK_APP=consultorio.py

(venv) aluno@aluno-VirtualBox:~/workspace/tads-bd2191-registros$ export FLASK_ENV=development
```

## 3.2 Configurar banco de dados
```console
(venv) aluno@aluno-VirtualBox:~/workspace/tads-bd2191-registros$ flask db init

(venv) aluno@aluno-VirtualBox:~/workspace/tads-bd2191-registros$ flask db migrate

(venv) aluno@aluno-VirtualBox:~/workspace/tads-bd2191-registros$ flask db upgrade
```
# 4 - Executando a aplicação

## 4.1 executando
```console
(venv) aluno@aluno-VirtualBox:~/workspace/tads-bd2191-registros$ flask run
```
