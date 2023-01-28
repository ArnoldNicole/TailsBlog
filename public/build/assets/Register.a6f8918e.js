import{u as p,o as f,c as _,w as n,a,b as e,H as w,d as t,L as g,n as V,e as b,f as d}from"./app.7757bed3.js";import{_ as v,a as y}from"./Guest.bbccc593.js";import{_ as r,a as m,b as i}from"./Label.937e9d05.js";import"./ApplicationLogo.bac0f332.js";const x=["onSubmit"],k={class:"mt-4"},h={class:"mt-4"},$={class:"mt-4"},q={class:"flex items-center justify-end mt-4"},N=d(" Already registered? "),U=d(" Register "),L={__name:"Register",setup(B){const s=p({name:"",email:"",password:"",password_confirmation:"",terms:!1}),u=()=>{s.post(route("register"),{onFinish:()=>s.reset("password","password_confirmation")})};return(c,o)=>(f(),_(v,null,{default:n(()=>[a(e(w),{title:"Register"}),t("form",{onSubmit:b(u,["prevent"])},[t("div",null,[a(r,{for:"name",value:"Name"}),a(m,{id:"name",type:"text",class:"mt-1 block w-full",modelValue:e(s).name,"onUpdate:modelValue":o[0]||(o[0]=l=>e(s).name=l),required:"",autofocus:"",autocomplete:"name"},null,8,["modelValue"]),a(i,{class:"mt-2",message:e(s).errors.name},null,8,["message"])]),t("div",k,[a(r,{for:"email",value:"Email"}),a(m,{id:"email",type:"email",class:"mt-1 block w-full",modelValue:e(s).email,"onUpdate:modelValue":o[1]||(o[1]=l=>e(s).email=l),required:"",autocomplete:"username"},null,8,["modelValue"]),a(i,{class:"mt-2",message:e(s).errors.email},null,8,["message"])]),t("div",h,[a(r,{for:"password",value:"Password"}),a(m,{id:"password",type:"password",class:"mt-1 block w-full",modelValue:e(s).password,"onUpdate:modelValue":o[2]||(o[2]=l=>e(s).password=l),required:"",autocomplete:"new-password"},null,8,["modelValue"]),a(i,{class:"mt-2",message:e(s).errors.password},null,8,["message"])]),t("div",$,[a(r,{for:"password_confirmation",value:"Confirm Password"}),a(m,{id:"password_confirmation",type:"password",class:"mt-1 block w-full",modelValue:e(s).password_confirmation,"onUpdate:modelValue":o[3]||(o[3]=l=>e(s).password_confirmation=l),required:"",autocomplete:"new-password"},null,8,["modelValue"]),a(i,{class:"mt-2",message:e(s).errors.password_confirmation},null,8,["message"])]),t("div",q,[a(e(g),{href:c.route("login"),class:"underline text-sm text-gray-600 hover:text-gray-900"},{default:n(()=>[N]),_:1},8,["href"]),a(y,{class:V(["ml-4",{"opacity-25":e(s).processing}]),disabled:e(s).processing},{default:n(()=>[U]),_:1},8,["class","disabled"])])],40,x)]),_:1}))}};export{L as default};