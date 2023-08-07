from db import  connection
from flask import jsonify,abort
class TreinamentoService():

    def get_all_treinamentos(self):
        try:
            query = """SELECT t.id, t.nome, t.descricao, t.duracao, t.caminho from treinamento t;"""
            cursor = connection.cursor()
            cursor.execute(query)
            treinamentos = cursor.fetchall()
            cursor.close()
        except Exception as ex:
            return jsonify({"message":str(ex),"code":500})
        if treinamentos is None:
            abort(404)
        return jsonify({"data": treinamentos})

    
    
    def post_treinamento(self, treinamento):
        try:
            query = """INSERT INTO treinamento
                    (nome, descricao, duracao)
                    VALUES (%s, %s, %s);"""
            cursor = connection.cursor()
            cursor.execute(query, (treinamento["nome"], treinamento["descricao"], treinamento["duracao"], treinamento["caminho"]))
            id_treinamento = cursor.lastrowid
            connection.commit()
            cursor.close()
        except Exception as ex:
            print(str(ex))
            return jsonify({"message": str(ex)})
        return jsonify({"success": True, "id": id_treinamento, "message": "Treinamento registrado com sucesso"}), 200

    
    def get_one_treinamentos(self, id):
        try:
            query = """SELECT t.id, t.nome , t.descricao, t.duracao, t.caminho
                    FROM treinamento t
                    where t.id=%s"""
            cursor = connection.cursor()
            cursor.execute(query, id)
            treinamentos = cursor.fetchall()
            cursor.close()
        except Exception as ex:
            return jsonify({"message":ex})
        if treinamentos is None:
            abort(404)
        return jsonify({"data":treinamentos[0]})
    
    def put_treinamento(self, treinamento, id):
        
        try:
            query = """UPDATE treinamento SET nome = %s, descricao = %s, duracao = %s, 
            WHERE treinamento.id = %s"""
            cursor = connection.cursor()
            cursor.execute(query, (treinamento["nome"],
                                  treinamento["descricao"],
                                  treinamento["duracao"], id))
            connection.commit()
            cursor.close()
          
        except Exception as ex:
            print(str(ex))
            return jsonify({"message": str(ex)})
        return jsonify({"success":True, "message":"Treinamento actualizado com sucesso"}), 201
    

    def desativar_treinamento(self, id):
            try:
                cursor = connection.cursor()
                query = "UPDATE treinamento SET estado = false WHERE id = %s"
                cursor.execute(query, (id,))
                connection.commit()
                cursor.close()
            except Exception as ex:
                return jsonify({"message": str(ex)})
            return jsonify({"message": "Treinamento desativado com sucesso."})    
    
