CREATE OR REPLACE procedure PRE.PRC_CREA_TIPO_PRODUCTO(P_DESC    IN VARCHAR2,
                                              P_CORR    OUT VARCHAR2,
                                              P_COD_MSG OUT VARCHAR2,
                                              P_DES_MSG OUT VARCHAR2) is

  v_corr NUMBER := 0;
begin
  p_cod_msg := '0';
  p_des_msg := 'Exitoso';
  begin
    select sec_tipo_producto.nextval into v_corr from dual;
  exception
    when others then
      p_cod_msg := '-51';
      p_des_msg := 'Problemas con la secuencia';
  end;
  begin
    insert into tipo_producto
      (cod_tipo_producto, des_tipo_producto, estado_tip_prod)
    values
      (v_corr, p_desc, 'A');
  exception
    when others then
      p_cod_msg := '-52';
      p_des_msg := 'No se pudo agregar el tipo de contacto al catalogo';
  end;
  if p_cod_msg = '0' then
    P_CORR := v_corr;
    commit;
  else
    rollback;
  end if;
end PRC_CREA_TIPO_PRODUCTO; 
/

