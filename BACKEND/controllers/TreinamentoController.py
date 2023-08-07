from flask_smorest import Blueprint
from flask.views import MethodView
from flask import request
from services import TreinamentoService
blp = Blueprint("treinamentos",__name__, description="Operacoes sobre o treinamento")

@blp.route("/treinamento")
class TreinamentoController(MethodView):
    def get(self):
        return TreinamentoService.get_all_treinamentos(self)

    def post(self):
        return TreinamentoService.post_treinamento(self,treinamento=request.get_json())
    
@blp.route("/treinamento/<int:id>")
class TreinamentoController(MethodView):
    def get(self,id):
        return TreinamentoService.get_one_treinamentos(self,id)
    
    def put(self,id):
        return TreinamentoService.put_treinamento(self,treinamento=request.get_json(), id=id)
    
    def delete(self, id):
        return TreinamentoService.desativar_treinamento(self, id=id)


