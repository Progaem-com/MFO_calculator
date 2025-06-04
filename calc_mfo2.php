<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Двойной калькулятор займов</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        body {
            background: linear-gradient(135deg, #e6f7ed 0%, #c2e8d0 100%);
            display: flex;
            flex-direction: column;
            align-items: center;
            min-height: 100vh;
            padding: 20px;
        }
        
        .page-title {
            text-align: center;
            margin: 20px 0 30px;
            color: #2c3e50;
        }
        
        .page-title h1 {
            font-size: 36px;
            margin-bottom: 10px;
            color: #27ae60;
        }
        
        .page-title p {
            font-size: 18px;
            color: #34495e;
            max-width: 800px;
            margin: 0 auto;
        }
        
        .calculators-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 40px;
            width: 100%;
            max-width: 1800px;
            margin-bottom: 40px;
        }
        
        .calculator-container {
            width: 100%;
            max-width: 900px;
            background: white;
            border-radius: 20px;
            box-shadow: 0 15px 35px rgba(0, 100, 50, 0.2);
            overflow: hidden;
            display: flex;
            flex-direction: column;
        }
        
        .header {
            background: linear-gradient(135deg, #2ecc71 0%, #27ae60 100%);
            color: white;
            padding: 25px 30px;
            text-align: center;
            position: relative;
            overflow: hidden;
        }
        
        .header::before {
            content: "";
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(255,255,255,0.2) 0%, rgba(255,255,255,0) 70%);
            transform: rotate(30deg);
        }
        
        .header h1 {
            font-size: 28px;
            font-weight: 700;
            margin-bottom: 8px;
            position: relative;
        }
        
        .header p {
            font-size: 16px;
            opacity: 0.9;
            position: relative;
        }
        
        .calculator-body {
            display: flex;
            flex-wrap: wrap;
        }
        
        .calculator-inputs {
            flex: 1;
            min-width: 300px;
            padding: 30px;
            border-right: 1px solid #e0f0e5;
        }
        
        .calculator-results {
            flex: 1;
            min-width: 300px;
            padding: 30px;
            background: #f8fcf9;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }
        
        .input-section {
            margin-bottom: 30px;
            position: relative;
        }
        
        .input-title {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
            color: #2c3e50;
            font-weight: 600;
            font-size: 18px;
        }
        
        .input-title i {
            margin-right: 10px;
            color: #27ae60;
            font-size: 20px;
        }
        
        .value-display {
            font-size: 32px;
            font-weight: 700;
            color: #27ae60;
            margin-bottom: 20px;
            text-align: center;
            transition: all 0.3s ease;
        }
        
        .slider-container {
            position: relative;
            height: 50px;
        }
        
        .slider {
            -webkit-appearance: none;
            width: 100%;
            height: 10px;
            border-radius: 5px;
            background: linear-gradient(90deg, #2ecc71 0%, #2ecc71 var(--slider-progress), #e0f0e5 var(--slider-progress), #e0f0e5 100%);
            outline: none;
        }
        
        .slider::-webkit-slider-thumb {
            -webkit-appearance: none;
            appearance: none;
            width: 28px;
            height: 28px;
            border-radius: 50%;
            background: #fff;
            cursor: pointer;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.2);
            border: 3px solid #27ae60;
            transition: all 0.2s ease;
        }
        
        .slider::-webkit-slider-thumb:hover {
            transform: scale(1.15);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
        }
        
        .slider-labels {
            display: flex;
            justify-content: space-between;
            margin-top: 10px;
            color: #7f8c8d;
            font-size: 14px;
            font-weight: 500;
        }
        
        .result-section {
            background: white;
            border-radius: 15px;
            padding: 25px;
            border: 1px solid #e0f0e5;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            margin-bottom: 30px;
        }
        
        .result-row {
            display: flex;
            justify-content: space-between;
            padding: 12px 0;
            border-bottom: 1px dashed #e0f0e5;
        }
        
        .result-row:last-child {
            border-bottom: none;
        }
        
        .result-label {
            display: flex;
            align-items: center;
            color: #2c3e50;
            font-size: 17px;
            font-weight: 500;
        }
        
        .result-label i {
            margin-right: 10px;
            color: #27ae60;
        }
        
        .result-value {
            font-weight: 700;
            font-size: 18px;
            color: #2c3e50;
        }
        
        .btn-submit {
            background: linear-gradient(135deg, #2ecc71 0%, #27ae60 100%);
            color: white;
            border: none;
            width: 100%;
            padding: 20px;
            font-size: 20px;
            font-weight: 700;
            border-radius: 12px;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 5px 15px rgba(46, 204, 113, 0.4);
            letter-spacing: 0.5px;
            position: relative;
            overflow: hidden;
            margin-top: 20px;
        }
        
        .btn-submit:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(46, 204, 113, 0.6);
        }
        
        .btn-submit:active {
            transform: translateY(0);
        }
        
        .btn-submit::after {
            content: "";
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: rgba(255, 255, 255, 0.2);
            transform: rotate(30deg);
            transition: all 0.5s ease;
        }
        
        .btn-submit:hover::after {
            transform: rotate(30deg) translate(20%, 20%);
        }
        
        .info-note {
            padding: 15px;
            background: #f1f9f4;
            border-radius: 10px;
            border-left: 4px solid #27ae60;
            font-size: 14px;
            color: #2c3e50;
            text-align: center;
        }
        
        .info-note strong {
            color: #27ae60;
        }
        
        .calculator-divider {
            width: 100%;
            text-align: center;
            margin: 20px 0;
            color: #27ae60;
            font-size: 24px;
            font-weight: bold;
        }
        
        /* Адаптивность для мобильных */
        @media (max-width: 768px) {
            .calculator-body {
                flex-direction: column;
            }
            
            .calculator-inputs {
                border-right: none;
                border-bottom: 1px solid #e0f0e5;
            }
            
            .calculator-results {
                padding: 20px;
            }
            
            .header {
                padding: 20px;
            }
            
            .header h1 {
                font-size: 24px;
            }
            
            .value-display {
                font-size: 28px;
            }
            
            .calculators-container {
                flex-direction: column;
                align-items: center;
                gap: 30px;
            }
        }
        
        @media (max-width: 480px) {
            .value-display {
                font-size: 24px;
            }
            
            .result-label {
                font-size: 15px;
            }
            
            .result-value {
                font-size: 16px;
            }
            
            .btn-submit {
                padding: 18px;
                font-size: 18px;
            }
            
            .page-title h1 {
                font-size: 28px;
            }
        }
    </style>
</head>
<body>
        <div class="button-container">
            <a href="https://progaem.com/usluga-sozdanie-kalkulyatora-zajmov-dlya-mfo.html" class="btn btn-primary" target=_blank>
                <i class="fas fa-calculator"></i>
                Заказать калькулятор МФО
            </a>
            <br>
            <a href="https://progaem.com/kontakty" class="btn btn-secondary"  target=_blank>
                <i class="fas fa-address-book"></i>
                Контакты
            </a>
        </div>
    <div class="page-title">
        <h1><i class="fas fa-calculator"></i> Двойной калькулятор займов</h1>
        <p>Два независимых калькулятора для расчета условий займа. Оба начинаются с суммы 10 000 рублей на срок 10 дней.</p>
    </div>
    
    <div class="calculators-container">
        <!-- Первый калькулятор -->
        <div class="calculator-container">
            <div class="header">
                <h1><i class="fas fa-calculator"></i> Калькулятор займов #1</h1>
                <p>Рассчитайте условия займа за секунды</p>
            </div>
            
            <div class="calculator-body">
                <div class="calculator-inputs">
                    <div class="input-section">
                        <div class="input-title">
                            <i class="fas fa-ruble-sign"></i> Выберите сумму
                        </div>
                        <div class="value-display" id="amount-value1">10 000 руб.</div>
                        <div class="slider-container">
                            <input 
                                type="range" 
                                min="1000" 
                                max="50000" 
                                step="1000" 
                                value="10000" 
                                class="slider" 
                                id="amount-slider1"
                                style="--slider-progress: 18%"
                            >
                            <div class="slider-labels">
                                <span>1 000 руб.</span>
                                <span>50 000 руб.</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="input-section">
                        <div class="input-title">
                            <i class="far fa-calendar-alt"></i> Выберите срок
                        </div>
                        <div class="value-display" id="term-value1">10 дней</div>
                        <div class="slider-container">
                            <input 
                                type="range" 
                                min="1" 
                                max="30" 
                                step="1" 
                                value="10" 
                                class="slider" 
                                id="term-slider1"
                                style="--slider-progress: 30%"
                            >
                            <div class="slider-labels">
                                <span>1 день</span>
                                <span>30 дней</span>
                            </div>
                        </div>
                    </div>
                    
                    <button class="btn-submit" id="submit-btn1">
                        <i class="fas fa-hand-holding-usd"></i> ПОЛУЧИТЬ ДЕНЬГИ
                    </button>
                </div>
                
                <div class="calculator-results">
                    <div class="result-section">
                        <div class="result-row">
                            <div class="result-label">
                                <i class="fas fa-percentage"></i> Процентная ставка
                            </div>
                            <div class="result-value" id="interest-rate1">0.0%</div>
                        </div>
                        <div class="result-row">
                            <div class="result-label">
                                <i class="fas fa-wallet"></i> Итого к оплате
                            </div>
                            <div class="result-value" id="total-amount1">10 000 руб.</div>
                        </div>
                        <div class="result-row">
                            <div class="result-label">
                                <i class="far fa-clock"></i> Оплатить до
                            </div>
                            <div class="result-value" id="repayment-date1">13.06.2025</div>
                        </div>
                    </div>
                    
                    <div class="info-note">
                        <strong>Выгодное предложение:</strong> Займы до 15 000 рублей на срок до 15 дней - <strong>без процентов!</strong>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="calculator-divider">
            <i class="fas fa-arrows-alt-h"></i>
        </div>
        
        <!-- Второй калькулятор -->
        <div class="calculator-container">
            <div class="header">
                <h1><i class="fas fa-calculator"></i> Калькулятор займов #2</h1>
                <p>Рассчитайте условия займа за секунды</p>
            </div>
            
            <div class="calculator-body">
                <div class="calculator-inputs">
                    <div class="input-section">
                        <div class="input-title">
                            <i class="fas fa-ruble-sign"></i> Выберите сумму
                        </div>
                        <div class="value-display" id="amount-value2">10 000 руб.</div>
                        <div class="slider-container">
                            <input 
                                type="range" 
                                min="1000" 
                                max="50000" 
                                step="1000" 
                                value="10000" 
                                class="slider" 
                                id="amount-slider2"
                                style="--slider-progress: 18%"
                            >
                            <div class="slider-labels">
                                <span>1 000 руб.</span>
                                <span>50 000 руб.</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="input-section">
                        <div class="input-title">
                            <i class="far fa-calendar-alt"></i> Выберите срок
                        </div>
                        <div class="value-display" id="term-value2">10 дней</div>
                        <div class="slider-container">
                            <input 
                                type="range" 
                                min="1" 
                                max="30" 
                                step="1" 
                                value="10" 
                                class="slider" 
                                id="term-slider2"
                                style="--slider-progress: 30%"
                            >
                            <div class="slider-labels">
                                <span>1 день</span>
                                <span>30 дней</span>
                            </div>
                        </div>
                    </div>
                    
                    <button class="btn-submit" id="submit-btn2">
                        <i class="fas fa-hand-holding-usd"></i> ПОЛУЧИТЬ ДЕНЬГИ
                    </button>
                </div>
                
                <div class="calculator-results">
                    <div class="result-section">
                        <div class="result-row">
                            <div class="result-label">
                                <i class="fas fa-percentage"></i> Процентная ставка
                            </div>
                            <div class="result-value" id="interest-rate2">0.0%</div>
                        </div>
                        <div class="result-row">
                            <div class="result-label">
                                <i class="fas fa-wallet"></i> Итого к оплате
                            </div>
                            <div class="result-value" id="total-amount2">10 000 руб.</div>
                        </div>
                        <div class="result-row">
                            <div class="result-label">
                                <i class="far fa-clock"></i> Оплатить до
                            </div>
                            <div class="result-value" id="repayment-date2">13.06.2025</div>
                        </div>
                    </div>
                    
                    <div class="info-note">
                        <strong>Выгодное предложение:</strong> Займы до 15 000 рублей на срок до 15 дней - <strong>без процентов!</strong>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Общие функции для обоих калькуляторов
        
        // Форматирование чисел с разделителями
        function formatNumber(num) {
            return num.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " ");
        }
        
        // Расчет даты погашения
        function calculateRepaymentDate(days) {
            const today = new Date();
            const repayment = new Date(today);
            repayment.setDate(today.getDate() + days);
            
            const day = repayment.getDate().toString().padStart(2, '0');
            const month = (repayment.getMonth() + 1).toString().padStart(2, '0');
            const year = repayment.getFullYear();
            
            return `${day}.${month}.${year}`;
        }
        
        // Расчет суммы к оплате с учетом условий
        function calculateTotalAmount(amount, term) {
            // Условие: до 15 000 руб. на срок до 15 дней - без процентов
            if (amount <= 15000 && term <= 15) {
                return amount;
            }
            
            // Во всех остальных случаях применяем ставку 0.8% в день
            const interest = amount * 0.008 * term;
            return Math.round(amount + interest);
        }
        
        // Инициализация калькулятора
        function initCalculator(calculatorId) {
            const amountSlider = document.getElementById(`amount-slider${calculatorId}`);
            const termSlider = document.getElementById(`term-slider${calculatorId}`);
            const amountValue = document.getElementById(`amount-value${calculatorId}`);
            const termValue = document.getElementById(`term-value${calculatorId}`);
            const totalAmount = document.getElementById(`total-amount${calculatorId}`);
            const repaymentDate = document.getElementById(`repayment-date${calculatorId}`);
            const interestRate = document.getElementById(`interest-rate${calculatorId}`);
            const submitButton = document.getElementById(`submit-btn${calculatorId}`);
            
            // Обновление значений
            function updateValues() {
                const amount = parseInt(amountSlider.value);
                const term = parseInt(termSlider.value);
                
                // Обновляем отображаемые значения
                amountValue.textContent = `${formatNumber(amount)} руб.`;
                termValue.textContent = `${term} ${term === 1 ? 'день' : term < 5 ? 'дня' : 'дней'}`;
                
                // Рассчитываем сумму к оплате
                const total = calculateTotalAmount(amount, term);
                totalAmount.textContent = `${formatNumber(total)} руб.`;
                
                // Обновляем дату погашения
                repaymentDate.textContent = calculateRepaymentDate(term);
                
                // Обновляем информацию о ставке
                if (amount <= 15000 && term <= 15) {
                    interestRate.textContent = "0.0%";
                    interestRate.style.color = "#27ae60";
                } else {
                    interestRate.textContent = "0.8% в день";
                    interestRate.style.color = "#e74c3c";
                }
                
                // Обновляем прогресс ползунков
                const amountProgress = (amount / 50000) * 100;
                const termProgress = (term / 30) * 100;
                amountSlider.style.setProperty('--slider-progress', `${amountProgress}%`);
                termSlider.style.setProperty('--slider-progress', `${termProgress}%`);
            }
            
            // Инициализация значений
            updateValues();
            
            // Обработчики событий
            amountSlider.addEventListener('input', updateValues);
            termSlider.addEventListener('input', updateValues);
            
            // Обработка кнопки
            submitButton.addEventListener('click', function() {
                const amount = parseInt(amountSlider.value);
                const term = parseInt(termSlider.value);
                const total = calculateTotalAmount(amount, term);
                
                // Анимация кнопки
                this.classList.add('clicked');
                setTimeout(() => {
                    this.classList.remove('clicked');
                }, 300);
                
                // Показать сообщение
                alert(`Заявка на займ #${calculatorId}:\nСумма: ${formatNumber(amount)} руб.\nСрок: ${term} дней\nК возврату: ${formatNumber(total)} руб.`);
            });
        }
        
        // Инициализация обоих калькуляторов при загрузке страницы
        document.addEventListener('DOMContentLoaded', function() {
            initCalculator(1);
            initCalculator(2);
        });
    </script>
</body>
</html>