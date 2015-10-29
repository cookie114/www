(function($){  
    //���  
    $.extend($,{  
        //�����ռ�  
        sortTable:{  
            sort:function(tableId,Idx){  
                var table = document.getElementById(tableId);  
                var tbody = table.tBodies[0];  
                var tr = tbody.rows;   
          
                var trValue = new Array();  
                for (var i=0; i<tr.length; i++ ) {  
                    trValue[i] = tr[i];  //�������и��е���Ϣ�洢���½���������  
                }  
          
                if (tbody.sortCol == Idx) {  
                    trValue.reverse(); //��������Ѿ�����������ˣ���ֱ�Ӷ��䷴������  
                } else {  
                    //trValue.sort(compareTrs(Idx));  //��������  
                    trValue.sort(function(tr1, tr2){  
                        var value1 = tr1.cells[Idx].innerHTML;  
                        var value2 = tr2.cells[Idx].innerHTML;  
                        return value1.localeCompare(value2);  
                    });  
                }  
          
                var fragment = document.createDocumentFragment();  //�½�һ������Ƭ�Σ����ڱ��������Ľ��  
                for (var i=0; i<trValue.length; i++ ) {  
                    fragment.appendChild(trValue[i]);  
                }  
          
                tbody.appendChild(fragment); //������Ľ���滻��֮ǰ��ֵ  
                tbody.sortCol = Idx;  
            }  
        }  
    });         
})(jQuery);  